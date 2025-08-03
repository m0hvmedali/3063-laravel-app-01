<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">User Info</h1>

        <div class="space-y-4">
            <div class="flex items-center border-b pb-3">
                <span class="font-semibold w-24 text-gray-600">Name:</span>
                <span class="text-gray-800">{{ $user['name'] }}</span>
            </div>

            <div class="flex items-center border-b pb-3">
                <span class="font-semibold w-24 text-gray-600">Email:</span>
                <span class="text-gray-800">{{ $user['email'] }}</span>
            </div>

            <div class="flex items-center border-b pb-3">
                <span class="font-semibold w-24 text-gray-600">Phone:</span>
                <span class="text-gray-800">{{ $user['phone'] }}</span>
            </div>

            <div class="flex items-center">
                <span class="font-semibold w-24 text-gray-600">Role:</span>
                <span class="text-gray-800">{{ $user['role'] }}</span>
            </div>
        </div>
    </div>
</body>

</html>
