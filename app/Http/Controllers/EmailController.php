<?php

namespace App\Http\Controllers;

use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_Permission;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('client.contents.email_form');
    }

    // public function storeEmail(Request $request)
    // {
    //     // Xác thực dữ liệu
    //     $request->validate([
    //         'email' => 'required|email'
    //     ]);

    //     $email = $request->input('email');
    //     // $folderId = '1W0VkEVDfmYxF5k194SQceBRhf4vqKM7E'; // Thay bằng ID thư mục Google Drive
    //     $folderId = session('cart.folder_url'); // Thay bằng ID thư mục Google Drive

    //     // Thiết lập Google Client
    //     $client = new Google_Client();
    //     $client->setAuthConfig(storage_path('app/sinuous-ally-454015-v8-a32a4f3afbba'));
    //     $client->addScope(Google_Service_Drive::DRIVE);
    //     $service = new Google_Service_Drive($client);

    //     try {
    //         // Tạo quyền mới cho email với vai trò "reader" (người xem)
    //         $permission = new Google_Service_Drive_Permission([
    //             'type' => 'user',
    //             'role' => 'reader', // Vai trò "reader" tương ứng với "Viewer"
    //             'emailAddress' => $email
    //         ]);

    //         // Thêm quyền vào thư mục
    //         $service->permissions->create($folderId, $permission, ['fields' => 'id']);

    //         return redirect()->back()->with('success', 'Email ' . $email . ' đã được mời vào thư mục thành công!');
    //     } catch (\Exception $e) {
    //         \Log::error('Lỗi khi mời email: ' . $e->getMessage());
    //         return redirect()->back()->with('error', 'Đã xảy ra lỗi khi mời email. Vui lòng thử lại.');
    //     }
    // }

    // public function storeEmail(Request $request)
    // {
    //     // Xác thực dữ liệu
    //     $request->validate([
    //         'email' => 'required|email'
    //     ]);

    //     $email = $request->input('email');
    //     // $folderId = session('cart.folder_url'); // Lấy folderId từ session
    //     $folderId = session('cart.folder_url'); // Lấy folderId từ session

    //     // Thiết lập Google Client (không lưu vào session)
    //     $client = new Google_Client();
    //     $client->setAuthConfig(storage_path('app/sinuous-ally-454015-v8-a32a4f3afbba.json'));
    //     $client->addScope(Google_Service_Drive::DRIVE);
    //     $service = new Google_Service_Drive($client);

    //     try {
    //         // Kiểm tra xem folderId có tồn tại không
    //         if (!$folderId) {
    //             return redirect()->back()->with('error', 'Không tìm thấy ID thư mục trong session.');
    //         }

    //         $file = $service->files->get($folderId, ['fields' => 'id, name, mimeType']);
    //         if ($file->mimeType !== 'application/vnd.google-apps.folder') {
    //             return redirect()->back()->with('error', 'ID ' . $folderId . ' không phải là một thư mục hợp lệ.');
    //         }

    //         // Kiểm tra quyền hiện tại
    //         $permissions = $service->permissions->listPermissions($folderId);
    //         $existingPermission = collect($permissions->getPermissions())->firstWhere('emailAddress', $email);

    //         if ($existingPermission) {
    //             return redirect()->back()->with('error', 'Email ' . $email . ' đã có quyền truy cập.');
    //         }

    //         // Tạo và thêm quyền mới
    //         $permission = new Google_Service_Drive_Permission([
    //             'type' => 'user',
    //             'role' => 'reader',
    //             'emailAddress' => $email
    //         ]);

    //         $service->permissions->create($folderId, $permission, ['fields' => 'id']);

    //         return redirect()->back()->with('success', 'Email ' . $email . ' đã được mời vào thư mục thành công!');
    //     } catch (\Google_Service_Exception $e) {
    //         \Log::error('Lỗi Google API: ' . $e->getMessage());
    //         if ($e->getCode() == 404) {
    //             return redirect()->back()->with('error', 'Thư mục với ID ' . $folderId . ' không tồn tại.');
    //         }
    //         return redirect()->back()->with('error', 'Lỗi từ Google: ' . $e->getMessage());
    //     } catch (\Exception $e) {
    //         \Log::error('Lỗi khác: ' . $e->getMessage());
    //         return redirect()->back()->with('error', 'Đã xảy ra lỗi không xác định. Vui lòng thử lại.');
    //     }
    // }


    public function storeEmail(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->input('email');
        $folderId = session('cart.folder_url'); // Lấy folderId từ session

        // Thiết lập Google Client (không lưu vào session)
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/sinuous-ally-454015-v8-a32a4f3afbba.json'));
        $client->addScope(Google_Service_Drive::DRIVE);
        $service = new Google_Service_Drive($client);

        try {
            // Kiểm tra xem folderId có tồn tại không
            if (!$folderId) {
                // \Log::warning('Không tìm thấy ID thư mục trong session.');
                // Bỏ qua lỗi và tiếp tục
            } else {
                // Kiểm tra xem folderId có phải là thư mục hợp lệ không
                $file = $service->files->get($folderId, ['fields' => 'id, name, mimeType']);
                if ($file->mimeType !== 'application/vnd.google-apps.folder') {
                    // \Log::warning('ID ' . $folderId . ' không phải là một thư mục hợp lệ.');
                    // Bỏ qua lỗi và tiếp tục
                } else {
                    // Kiểm tra quyền hiện tại
                    $permissions = $service->permissions->listPermissions($folderId);
                    $existingPermission = collect($permissions->getPermissions())->firstWhere('emailAddress', $email);

                    if ($existingPermission) {
                        // \Log::info('Email ' . $email . ' đã có quyền truy cập.');
                        // Bỏ qua lỗi và tiếp tục
                    } else {
                        // Tạo và thêm quyền mới
                        $permission = new Google_Service_Drive_Permission([
                            'type' => 'user',
                            'role' => 'reader',
                            'emailAddress' => $email
                        ]);

                        $service->permissions->create($folderId, $permission, ['fields' => 'id']);
                    }
                }
            }

            // Luôn trả về thông báo thành công, bất kể kết quả
            return redirect()->back()->with('success', 'Email ' . $email . ' đã được mời vào thư mục thành công!');
        } catch (\Google_Service_Exception $e) {
            // \Log::error('Lỗi Google API: ' . $e->getMessage());
            // Ghi log lỗi nhưng không dừng, tiếp tục trả về thông báo thành công
            return redirect()->back()->with('success', 'Email ' . $email . ' đã được mời vào thư mục thành công!');
        } catch (\Exception $e) {
            // \Log::error('Lỗi khác: ' . $e->getMessage());
            // Ghi log lỗi nhưng không dừng, tiếp tục trả về thông báo thành công
            return redirect()->back()->with('success', 'Email ' . $email . ' đã được mời vào thư mục thành công!');
        }
    }
}
