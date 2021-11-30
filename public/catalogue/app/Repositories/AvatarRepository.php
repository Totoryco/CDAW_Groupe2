<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class AvatarRepository
{
    /**
     * Upload the avatar
     * @param $avatar
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function uploadAvatar($avatar, $name=null, $user_id)
    {
        return $this->upload($avatar, $user_id);
    }
    /**
     * Upload the avatar
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    private function upload($avatar, $name=null, $user_id)
    {
        try{
            $name == null ? $name = uniqid() : $name = $name;
            $path = Storage::disk('public')->put('images', $avatar);
            $uploadedAvatar = Avatar::create([
                'user_id' => $user_id,
                'path' => $path,
                'name' => $name,
            ]);
            return $uploadedAvatar;
        }catch (\Exception $exception){
            return response('Internal Server Error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}