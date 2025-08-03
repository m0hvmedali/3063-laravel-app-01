<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">All Users</h1>
        <div class="bg-white rounded-lg shadow-md p-6">
            <ul class="divide-y divide-gray-200">
                @foreach ($users as $user)
                <li class="py-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <p class="text-lg font-medium text-gray-900">{{ $user['name'] }}</p>
                            <p class="text-gray-600">{{ $user['email'] }}</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 text-sm font-semibold rounded-full
                        @if($user['role'] === 'admin')
                            bg-purple-100 text-purple-800
                        @else
                            bg-gray-100 text-gray-800
                        @endif
                    ">
                        {{ $user['role'] }}
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>


</html>