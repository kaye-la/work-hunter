<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DiagrammController extends Controller
{
    //<?php
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$dbh = new PDO('mysql:dbname=3035553501;host=localhost', 'root', '');
		$page_id = 123;
		$sth = $dbh->prepare("SELECT * FROM `visits` WHERE `page_id` = ? ORDER BY `date`");
		$sth->execute(array($page_id));
		$res = $sth->fetchAll(PDO::FETCH_ASSOC);
		//echo $res;
		//printf();
		$list = array();
		foreach ($res as $row) {
			$list[] = array('year' => date('d.m.Y', strtotime($row['date'])), 'value' => $row['counter']);
			//echo $row['date'];
		}
        //echo json_encode($res);
    	return view('diagramm')->with(array('res'=>$list));   
    }
}
