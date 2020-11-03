<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\GrandDocument;

use App\Http\Resources\GrandDocumentResource;

use Illuminate\Http\Request;

class GrandDocumentEtImageDeFranceController extends Controller
{
    public function index(){

        $json = Storage::disk('local')->get('/flatdata/archive_doc.json');
        $json = json_decode($json, true);

        $aDoc = [];

        foreach ($json as $docJson) {
            $doc = new GrandDocument();
            $doc->forceFill($docJson);
            $aDoc[] = $doc;
        }
        return GrandDocumentResource::collection($aDoc);
    }
}
