<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class InformationController extends Controller
{
    public function index()
    {
        $informations = [];
        // ini_set('auto_detect_line_endings',TRUE);
        $file = 'information.csv';
        $destinationPath = public_path().'/';

        if (($open = fopen($destinationPath . $file, "r")) !== FALSE) {
            $open = fopen($destinationPath . $file, "r");
            while (($data = fgetcsv($open, null, ";")) !== FALSE) {
                $info['id'] = $data[0];
                $info['name'] = $data[1];
                $info['gender'] = $data[2];
                $info['phone'] = $data[3];
                $info['email'] = $data[4];
                $info['address'] = $data[5];
                $info['dob'] = $data[6];
                $info['modeofcontact'] = $data[7];
                $info['education'] = $data[8];
                array_push($informations, $info);
            }

            fclose($open);
        }
        return view('information.index', compact('informations'));
    }
    public function create()
    {
        return view('information.create');
    }
    public function store(Request $request)
    {
        $id = Str::uuid();
        $info = array(
            'id' => $id,
            'name' => $request->name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'dob' => $request->dob,
            'mode-of-contact' => $request->modeofcontact,
            'education' => $request->education,
        );
        $file = 'information.csv';
        $destinationPath = public_path().'/';;

        $file = fopen($destinationPath.$file, "a");
        fputcsv($file, $info, ';');
        fclose($file);

        return redirect()->route('home');
    }
    public function show($id)
    {
        $informations = [];
        $destinationPath = public_path().'/';;
        $file = 'information.csv';
        if (($open = fopen($destinationPath . $file, "r")) !== FALSE) {
            while (($data = fgetcsv($open, null, ";")) !== FALSE) {
                if ($id === $data[0]) {
                    $info['id'] = $data[0];
                    $info['name'] = $data[1];
                    $info['gender'] = $data[2];
                    $info['phone'] = $data[3];
                    $info['email'] = $data[4];
                    $info['address'] = $data[5];
                    $info['dob'] = $data[6];
                    $info['modeofcontact'] = $data[7];
                    $info['education'] = $data[8];
                }
            }
        }
        fclose($open);
        return view('information.show', compact('info'));

    }
    public function destroy($id)
    {
        $informations = [];
        $destinationPath = public_path().'/';
        $file = 'information.csv';

        $fileTemp = 'test_file_temp.csv';
        $filePointerTemp = fopen($destinationPath . $fileTemp, "a");

        if (($open = fopen($destinationPath . $file, "r")) !== FALSE) {
            while (($data = fgetcsv($open, null, ";")) !== FALSE) {
                if ($id === $data[0]) {
                } else {
                    $info['id'] = $data[0];
                    $info['name'] = $data[1];
                    $info['gender'] = $data[2];
                    $info['phone'] = $data[3];
                    $info['email'] = $data[4];
                    $info['address'] = $data[5];
                    $info['dob'] = $data[6];
                    $info['modeofcontact'] = $data[7];
                    $info['education'] = $data[8];
                    array_push($informations, $info);
                    fputcsv($filePointerTemp, $info, ';');
                }
            }
            fclose($open);
            fclose($filePointerTemp);
            unlink($destinationPath . $file);
            rename($destinationPath . $fileTemp, $destinationPath . $file);
        }
        return redirect()->route('home');
    }
}
