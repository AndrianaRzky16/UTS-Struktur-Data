# Single Linked List in PHP

This project demonstrates how to implement a **Single Linked List** in PHP to manage an e-commerce platform's customer order list. Each node in the list stores the following information:
- **Order ID**
- **Customer Name**
- **Order Status** (`diproses`, `dikirim`, or `selesai`)

The program supports the following operations:
1. Add a new order to the list (Append).
2. Delete an order by its ID.
3. Filter and display orders by a specific status.
4. Display all orders.

---

## Usage

### Running the Program
1. Save the file as `SingleLinkedList.php`.
2. Run the program using the terminal:
   ```bash
   php SingleLinkedList.php
   ```

Display All Orders
The display() function outputs all orders in the following format:
```
ID        Name                Status
---------------------------------------------
1         Alice               diproses       
2         Bob                 dikirim        
3         Charlie             selesai        
```
Filter Orders by Status
The filter() function filters and displays orders with a specific status. For example:
```
Filter Orders (Status: dikirim):
ID        Name                Status
---------------------------------------------
2         Bob                 dikirim        
```
Delete an Order by ID
The delete() function removes an order by its ID. After deleting, the list is updated:
```
Delete Order with ID 2:
ID        Name                Status
---------------------------------------------
1         Alice               diproses       
3         Charlie             selesai        
```
When you run the program, you will see the following output:
```
All Orders:
ID        Name                Status
---------------------------------------------
1         Alice               diproses       
2         Bob                 dikirim        
3         Charlie             selesai        

Filter Orders (Status: dikirim):
ID        Name                Status
---------------------------------------------
2         Bob                 dikirim        

Delete Order with ID 2:
ID        Name                Status
---------------------------------------------
1         Alice               diproses       
3         Charlie             selesai        
```