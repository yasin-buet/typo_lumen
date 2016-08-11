<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TypoController extends Controller
{
    public function getTypos()
    {

        $typosArr = array();
        $str = array();
        $str = 'http://www.asdasdjhsd.com/';

        $strArr = str_split($str);
        //Proximity of keys on keyboard
        $arr_prox = array();
        $arr_prox[':'] = array(';', 'l', '.', 'p');
        $arr_prox['.'] = array(',', '/', ';', 'l');
        $arr_prox['/'] = array('.', 'l');
        $arr_prox['a'] = array('q', 'w', 'z', 'x');
        $arr_prox['b'] = array('v', 'f', 'g', 'h', 'n');
        $arr_prox['c'] = array('x', 's', 'd', 'f', 'v');
        $arr_prox['d'] = array('x', 's', 'w', 'e', 'r', 'f', 'v', 'c');
        $arr_prox['e'] = array('w', 's', 'd', 'f', 'r');
        $arr_prox['f'] = array('c', 'd', 'e', 'r', 't', 'g', 'b', 'v');
        $arr_prox['g'] = array('r', 'f', 'v', 't', 'b', 'y', 'h', 'n');
        $arr_prox['h'] = array('b', 'g', 't', 'y', 'u', 'j', 'm', 'n');
        $arr_prox['i'] = array('u', 'j', 'k', 'l', 'o');
        $arr_prox['j'] = array('n', 'h', 'y', 'u', 'i', 'k', 'm');
        $arr_prox['k'] = array('u', 'j', 'm', 'l', 'o');
        $arr_prox['l'] = array('p', 'o', 'i', 'k', 'm');
        $arr_prox['m'] = array('n', 'h', 'j', 'k', 'l');
        $arr_prox['n'] = array('b', 'g', 'h', 'j', 'm');
        $arr_prox['o'] = array('i', 'k', 'l', 'p');
        $arr_prox['p'] = array('o', 'l');
        $arr_prox['r'] = array('e', 'd', 'f', 'g', 't');
        $arr_prox['s'] = array('q', 'w', 'e', 'z', 'x', 'c');
        $arr_prox['t'] = array('r', 'f', 'g', 'h', 'y');
        $arr_prox['u'] = array('y', 'h', 'j', 'k', 'i');
        $arr_prox['v'] = array('', 'c', 'd', 'f', 'g', 'b');
        $arr_prox['w'] = array('q', 'a', 's', 'd', 'e');
        $arr_prox['x'] = array('z', 'a', 's', 'd', 'c');
        $arr_prox['y'] = array('t', 'g', 'h', 'j', 'u');
        $arr_prox['z'] = array('x', 's', 'a');
        $arr_prox['1'] = array('q', 'w');
        $arr_prox['2'] = array('q', 'w', 'e');
        $arr_prox['3'] = array('w', 'e', 'r');
        $arr_prox['4'] = array('e', 'r', 't');
        $arr_prox['5'] = array('r', 't', 'y');
        $arr_prox['6'] = array('t', 'y', 'u');
        $arr_prox['7'] = array('y', 'u', 'i');
        $arr_prox['8'] = array('u', 'i', 'o');
        $arr_prox['9'] = array('i', 'o', 'p');
        $arr_prox['0'] = array('o', 'p');

        foreach($strArr as $key=>$value){
            $temp = $strArr;
            foreach ($arr_prox[$value] as $proximity){
                $temp[$key] = $proximity;
                $typosArr[] = join("", $temp);
            }
        }

         dd($typosArr);
    }
    public function index(Request $request)
    {
        $url = 'http://www.google.com/';
        $typosArr = array();


        $strArr = str_split($url);

        $arr_prox = array();
        $arr_prox[':'] = array(';', 'l', '.', 'p');
        $arr_prox['.'] = array(',', '/', ';', 'l');
        $arr_prox['/'] = array('.', 'l');
        $arr_prox['a'] = array('q', 'w', 'z', 'x');
        $arr_prox['b'] = array('v', 'f', 'g', 'h', 'n');
        $arr_prox['c'] = array('x', 's', 'd', 'f', 'v');
        $arr_prox['d'] = array('x', 's', 'w', 'e', 'r', 'f', 'v', 'c');
        $arr_prox['e'] = array('w', 's', 'd', 'f', 'r');
        $arr_prox['f'] = array('c', 'd', 'e', 'r', 't', 'g', 'b', 'v');
        $arr_prox['g'] = array('r', 'f', 'v', 't', 'b', 'y', 'h', 'n');
        $arr_prox['h'] = array('b', 'g', 't', 'y', 'u', 'j', 'm', 'n');
        $arr_prox['i'] = array('u', 'j', 'k', 'l', 'o');
        $arr_prox['j'] = array('n', 'h', 'y', 'u', 'i', 'k', 'm');
        $arr_prox['k'] = array('u', 'j', 'm', 'l', 'o');
        $arr_prox['l'] = array('p', 'o', 'i', 'k', 'm');
        $arr_prox['m'] = array('n', 'h', 'j', 'k', 'l');
        $arr_prox['n'] = array('b', 'g', 'h', 'j', 'm');
        $arr_prox['o'] = array('i', 'k', 'l', 'p');
        $arr_prox['p'] = array('o', 'l');
        $arr_prox['r'] = array('e', 'd', 'f', 'g', 't');
        $arr_prox['s'] = array('q', 'w', 'e', 'z', 'x', 'c');
        $arr_prox['t'] = array('r', 'f', 'g', 'h', 'y');
        $arr_prox['u'] = array('y', 'h', 'j', 'k', 'i');
        $arr_prox['v'] = array('', 'c', 'd', 'f', 'g', 'b');
        $arr_prox['w'] = array('q', 'a', 's', 'd', 'e');
        $arr_prox['x'] = array('z', 'a', 's', 'd', 'c');
        $arr_prox['y'] = array('t', 'g', 'h', 'j', 'u');
        $arr_prox['z'] = array('x', 's', 'a');
        $arr_prox['1'] = array('q', 'w');
        $arr_prox['2'] = array('q', 'w', 'e');
        $arr_prox['3'] = array('w', 'e', 'r');
        $arr_prox['4'] = array('e', 'r', 't');
        $arr_prox['5'] = array('r', 't', 'y');
        $arr_prox['6'] = array('t', 'y', 'u');
        $arr_prox['7'] = array('y', 'u', 'i');
        $arr_prox['8'] = array('u', 'i', 'o');
        $arr_prox['9'] = array('i', 'o', 'p');
        $arr_prox['0'] = array('o', 'p');

        foreach($strArr as $key=>$value){
            $temp = $strArr;
            foreach ($arr_prox[$value] as $proximity){
                $temp[$key] = $proximity;
                $typosArr[] = join("", $temp);
            }
        }
        // dd($typosArr);

        foreach ($typosArr as $key => $value) { echo $typosArr[$key]. "is a possible typo";
        echo "\n";
        //  $url_headers = @get_headers($typosArr[$key]);
        //  if(!$url_headers || $url_headers[0] == 'HTTP/1.1 404 Not Found') {
        //     $exists = false;
        //     echo $typosArr[$key]. "is not live". "\n";
        // }
        // else {
        //     echo $typosArr[$key]. "is live". "\n";
        // }
        }
        
        // dd($exists);
    }

    
}