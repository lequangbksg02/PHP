<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 23:08
 */

namespace Controller;

use function Couchbase\defaultDecoder;
use Model\Order;
use Model\OrderDB;
use Model\DBConnection;

class OrderController
{

    public $OrderDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=ungdungweb", "root", "");
        $this->OrderDB = new OrderDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $thitbachi = $_POST['thitbachi'];
            $thitsuon = $_POST['thitsuon'];
            $thitcay = $_POST['thitcay'];
            $thitmeo = $_POST['thitmeo'];
            $order = new Order($thitbachi, $thitsuon, $thitcay, $thitmeo);
            $this->orderDB->create($order);
            $message = 'Order created';
            include 'view/add.php';
        }
    }

    public function index()
    {
        $order = $this->orderDB->getAll();
        include 'view/list.php';
    }




    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $order = $this->orderDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->orderDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $order = $this->orderDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $order = new Order($_POST['thitbachi'], $_POST['thitsuon'], $_POST['thitcay'], $_POST['thitmeo']);
            $this->orderDB->update($id, $order);
            header('Location: index.php');
        }
    }
}