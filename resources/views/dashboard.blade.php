<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurant_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>
<div class="container bg-black">
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="flex flex-col">
<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
<div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
<div class="overflow-hidden shadow-md sm:rounded-lg">
<table class="min-w-full">
<thead class="bg-gray-50 dark:bg-gray-700">
<tr>
<th scope="col"
    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    First Name
</th>
<th scope="col"
    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Last Name
</th>
<th scope="col"
    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Email
</th>
<th scope="col"
    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Mobile Number
</th>
<th scope="col"
    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Date
</th>

<th scope="col"
    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
    Guests
</th>

</tr>
</thead>
<tbody>





<?php

// SQL query to fetch data from the table
$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Output data of each row
while ($row = $result->fetch_assoc()) {
if (Auth::user()->email == $row["email"] ) {
$data = array(
$row["first_name"],
$row["last_name"],
$row["email"],
$row["tel_number"],
$row["res_date"],
$row["table_id"],
$row["guest_number"],
);

if($data)
{
?>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
<td
class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
{{$data[0]}}
</td>
<td
class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
{{$data[1]}}
</td>
<td
class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
{{$data[2]}}
</td>
<td
class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
{{$data[3]}}
</td>
<td
class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
{{$data[4]}}
</td>
<td
class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
{{$data[5]}}
</td>

</tr>


</tbody>


<?php
}else{
?>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

No data found

</tr>
</tbody>  
<?php

}
}

}
} else {
echo "No results found";
}

// Close the database connection
$conn->close();
?>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    </div>
    
</x-app-layout>
