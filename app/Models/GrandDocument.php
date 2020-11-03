<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandDocument extends Model
{
    use HasFactory;

   /**
     * Get the document's date.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateAttribute(){

        if(isset($this->fields['date_du_document'])){
            
            $rawDate = $this->fields['date_du_document'];
    
            // regex that allow us to get number that have between 3 and 4 digit 
            preg_match_all('!\d{3,4}!', $rawDate, $matches );

            // matches are always an array, but it can be empty
            // return the date if not empty
            return empty($matches[0]) ? '' : $matches[0][0];
        }else{
            return 'date inconnu';
        }

    }
}
