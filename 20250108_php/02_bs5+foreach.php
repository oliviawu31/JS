<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bs5_foreach</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Shop</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $data = [
                        [
                            'id' => 1,
                            'name' => '台北店',
                            'mobile' => '0911-111-111',
                            'address' => '台北市中正路1號'
                        ],

                        [
                            'id' => 2,
                            'name' => '台中店',
                            'mobile' => '0922-222-222',
                            'address' => '台中市中正路2號'
                        ],

                        [
                            'id' => 3,
                            'name' => '高雄店',
                            'mobile' => '0933-333-333',
                            'address' => '台中市中正路2號'
                        ]
                        ];
                        foreach ($data as $row){

                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['mobile'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "</tr>";

                        }

                        ?>


            </tbody>
        </table>
    </div>

</body>

</html>