<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Support\Facades\Response;

class FrontendController extends Controller
{

    //Landing
    public function landing()
    {
        $products = Product::all();

        return view('home.index', compact('products'));
    }

    //Contact
    public function contact()
    {
        return view('contact.index');
    }

    //Client
    public function client()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    //Company
    public function about()
    {
        return view('about.index');
    }

    public function product()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function product_detail($id)
    {
        // Jika id = 2, arahkan ke halaman workshop
        if ($id == 2) {
            // Ambil produk
            $products = Product::findOrFail($id);

            // Asumsikan ID produk dari 1 sampai 8 (bisa kamu ubah jika ID-nya bukan urutan)
            $minId = 1;
            $maxId = 8;

            // Hitung prevId dan nextId (looping)
            $prevId = $id - 1 < $minId ? $maxId : $id - 1;
            $nextId = $id + 1 > $maxId ? $minId : $id + 1;

            return view('workshop.index', compact('products', 'prevId', 'nextId'));
        } else {
            // Ambil produk
            $products = Product::findOrFail($id);

            // Asumsikan ID produk dari 1 sampai 8 (bisa kamu ubah jika ID-nya bukan urutan)
            $minId = 1;
            $maxId = 8;

            // Hitung prevId dan nextId (looping)
            $prevId = $id - 1 < $minId ? $maxId : $id - 1;
            $nextId = $id + 1 > $maxId ? $minId : $id + 1;

            return view('product.detail.index', compact('products', 'prevId', 'nextId'));
        }
    }


    //K9 Vision
    public function k9_vision()
    {
        return view('product.k9');
    }
    //RFID
    public function securetag()
    {
        return view('product.securetags');
    }

    //Project
    public function project_references()
    {
        $projects = Project::all();

        return view('project.index', compact('projects'));
    }
    public function project_gallery()
    {
        return view('gallery.index');
    }

    // Download PDF
    public function pdf_building()
    {
        $fileName = 'Brosur BMC.pdf';
        $path = public_path('assets/img/brosur/' . $fileName);

        return Response::download($path, $fileName, [
            'Content-Type' => 'application/pdf',
        ]);
    }
    public function pdf_contractor()
    {
        $fileName = 'Brosur Konstruksi.pdf';

        $path = public_path('assets/img/brosur/' . $fileName);

        return Response::download($path, $fileName, [
            'Content-Type' => 'application/pdf',
        ]);
    }
    public function pdf_dokumentasi()
    {
        $fileName = 'Dokumentasi Pekerjaan.pdf';

        $path = public_path('assets/img/brosur/' . $fileName);

        return Response::download($path, $fileName, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
