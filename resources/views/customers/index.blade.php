<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Page</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="text-2xl text-center p-5">
    <h1>Customers Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, aut!</p>

    <div class="p-4">
        <table class="table-auto border-collapse border border-slate-400 w-full">
            <thead>
                <tr>
                    <th class="border border-slate-300">Name</th>
                    <th class="border border-slate-300">City</th>
                    <th class="border border-slate-300">Country</th>
                    <th class="border border-slate-300">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer) { ?>
                <tr>
                    <td class="border border-slate-300"><?= $customer['name'] ?></td>
                    <td class="border border-slate-300"><?= $customer['city'] ?></td>
                    <td class="border border-slate-300"><?= $customer['country'] ?></td>
                    <td class="border border-slate-300"><?= $customer['phone'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
