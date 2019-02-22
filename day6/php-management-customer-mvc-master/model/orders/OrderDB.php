<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 22:53
 */

namespace Model;

class OrderDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($order)
    {
        $sql = "INSERT INTO order(thitbachi, thitsuon, thitcay, thitmeo) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $order->thitbachi);
        $statement->bindParam(2, $order->thitsuon);
        $statement->bindParam(3, $order->thitcay);
        $statement->bindParam(3, $order->thitmeo);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM order";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $order = [];
        foreach ($result as $row) {
            $order = new Customer($row['thitbachi'], $row['thitsuon'], $row['thitcay'], $row['thitmeo']);
            $order->id = $row['id'];
            $order[] = $order;
        }
        return $order;
    }

    public function get($id){
        $sql = "SELECT * FROM order WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $order = new Order($row['thitbachi'], $row['thitsuon'], $row['thitcay'], $row['thitmeo']);
        $order->id = $row['id'];
        return $order;
    }


    public function delete($id){
        $sql = "DELETE FROM order WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $order)
    {
        $sql = "UPDATE customer SET name = ?, email = ?, address = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $order->thitbachi);
        $statement->bindParam(2, $order->thitsuon);
        $statement->bindParam(3, $order->thitcay);
        $statement->bindParam(3, $order->thitmeo);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }

}