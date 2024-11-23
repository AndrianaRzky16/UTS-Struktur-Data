<?php

// Node Class
class Node
{
 public $id;
 public $name;
 public $status;
 public $next;

 public function __construct($id, $name, $status)
 {
  $this->id = $id;
  $this->name = $name;
  $this->status = $status;
  $this->next = null;
 }
}

// Linked List Class
class LinkedList
{
 private $head;

 public function __construct()
 {
  $this->head = null;
 }

 // Add a new order to the list (Append)
 public function append($id, $name, $status)
 {
  $newNode = new Node($id, $name, $status);
  if ($this->head === null) {
   $this->head = $newNode;
  } else {
   $current = $this->head;
   while ($current->next !== null) {
    $current = $current->next;
   }
   $current->next = $newNode;
  }
 }

 // Delete an order by ID
 public function delete($id)
 {
  if ($this->head === null) return;

  // If the head is the node to delete
  if ($this->head->id === $id) {
   $this->head = $this->head->next;
   return;
  }

  // Traverse to find and remove the node
  $current = $this->head;
  while ($current->next !== null && $current->next->id !== $id) {
   $current = $current->next;
  }

  if ($current->next !== null) {
   $current->next = $current->next->next;
  }
 }

 // Filter orders by status
 public function filterByStatus($status)
 {
  $current = $this->head;
  $result = [];
  while ($current !== null) {
   if ($current->status === $status) {
    $result[] = [
     'id' => $current->id,
     'name' => $current->name,
     'status' => $current->status
    ];
   }
   $current = $current->next;
  }
  return $result;
 }

 // Display all orders
 public function display()
 {
  $current = $this->head;
  echo str_pad("ID", 10) . str_pad("Name", 20) . str_pad("Status", 15) . "\n";
  echo str_repeat("-", 45) . "\n";
  while ($current !== null) {
   echo str_pad($current->id, 10) .
    str_pad($current->name, 20) .
    str_pad($current->status, 15) . "\n";
   $current = $current->next;
  }
 }

 // Display filtered orders with table formatting
 public function displayFiltered($filteredOrders)
 {
  echo str_pad("ID", 10) . str_pad("Name", 20) . str_pad("Status", 15) . "\n";
  echo str_repeat("-", 45) . "\n";
  foreach ($filteredOrders as $order) {
   echo str_pad($order['id'], 10) .
    str_pad($order['name'], 20) .
    str_pad($order['status'], 15) . "\n";
  }
 }
}

// Example Usage
$list = new LinkedList();
$list->append(1, "Alice", "diproses");
$list->append(2, "Bob", "dikirim");
$list->append(3, "Charlie", "selesai");

echo "All Orders:\n";
$list->display();

echo "\nFilter Orders (Status: dikirim):\n";
$filteredOrders = $list->filterByStatus("dikirim");
$list->displayFiltered($filteredOrders);

echo "\nDelete Order with ID 2:\n";
$list->delete(2);
$list->display();