@include('homepage.top')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTables with Tailwind CSS</title>

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Include DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- Include DataTables JavaScript and dependencies -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>

<body>

    <!-- Your content goes here -->
    <div class="container p-8 mb-4 mt-4 pl-5 pr-5 bg-white border rounded-lg">
        <div class="overflow-x-auto">
            <table id="modernTable" class="table-auto w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="px-4 py-2">John Doe</td>
                        <td class="px-4 py-2">john@example.com</td>
                        <td class="px-4 py-2">(555) 123-4567</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#modernTable').DataTable();
        });
    </script>
</body>

</html>
@include('homepage.footer')