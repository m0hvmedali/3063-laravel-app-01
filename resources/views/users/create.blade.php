<!DOCTYPE html>
<html>

<head>
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Create New User</h1>

            <form class="space-y-4">
                <div>
                    <input type="text" placeholder="Name"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <input type="email" placeholder="Email"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <input type="text" placeholder="Phone"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <select
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="admin">admin</option>
                        <option value="guest">guest</option>
                        <option value="manager">manager</option>
                    </select>
                </div>


            </form>
        </div>
    </div>
</body>

</html>