<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function index()
    {
        return view("create");
    }

    public function create(Request $request)
    {
        if (!Auth::check()) {
            return redirect("/login")->withErrors([
                "error" => "Login untuk membuat undangan.",
            ]);
        }
        $user = Auth::user();
        $request->request->add(["author_username" => $user->username]);
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

    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect("/login")->withErrors([
                "error" => "Login untuk mengakses dashboard."
            ]);
        }
        $user = Auth::user();
        $invitations = Invitation::all()->where("author_username", "=", $user->username);
        return view("dashboard", [
            "user" => $user,
            "invitations" => $invitations
        ]);
    }

    public function edit($slug)
    {
        if (!Auth::check()) {
            return redirect("/login")->withErrors([
                "error" => "Login untuk mengedit."
            ]);
        }
        $user = Auth::user();
        $invitations = Invitation::all()->where("author_username", "=", $user->username)->where("slug", "=", $slug);
        if ($invitations->count() == 0) {
            return view("edit")->with("error", $slug . " tidak ditemukan.");
        }
        $invitation = $invitations->first();
        return view("edit", [
            "data" => $invitation
        ]);
    }
    public function update(Request $request)
    {
        if (!Auth::check()) {
            return redirect("/login")->withErrors([
                "error" => "Login untuk mengedit undangan.",
            ]);
        }
        $user = Auth::user();
        $request->request->add(["author_username" => $user->username]);
        $data = $request->except("_token");
        try {
            Invitation::where("slug", "=", $request->slug)->update($data);
            return view("edit", [
                "error" => false,
                "data" => $data
            ]);
        } catch (QueryException $err) {
            if (str_contains($err->getMessage(), 'Duplicate')) {
                return view("edit", [
                    "error" => true,
                    "data" => "Nama URL (slug) sudah ada yang menggunakan. Gunakan nama URL lain."
                ]);
            } else {
                return view("edit", [
                    "error" => true,
                    "data" => $err->getMessage()
                ]);
            }
        }
    }

    public function delete($slug)
    {
        Invitation::where("slug", "=", $slug)->delete();
        return redirect("/dashboard");
    }
}
