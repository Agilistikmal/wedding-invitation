<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class InvitationController extends Controller
{
    public function index()
    {
        return view("create");
    }

    public function create(Request $request)
    {
        $data = $request->except("_token");
        try {
            Invitation::create($data);
            return view("create", [
                "error" => false,
                "data" => $data
            ]);
        } catch (QueryException $err) {
            if (str_contains($err->getMessage(), 'Duplicate')) {
                return view("create", [
                    "error" => true,
                    "data" => "Nama URL (slug) sudah ada yang menggunakan. Gunakan nama URL lain."
                ]);
            } else {
                return view("create", [
                    "error" => true,
                    "data" => $err->getMessage()
                ]);
            }
        }
    }

    public function detail($slug)
    {
        $data = Invitation::all()->where("slug", $slug);
        if ($data->count() == 0) {
            return view("detail", [
                "error" => true,
                "data" => $slug
            ]);
        }
        $data = $data->first();
        return view("detail", [
            "error" => false,
            "data" => $data
        ]);
    }
}
