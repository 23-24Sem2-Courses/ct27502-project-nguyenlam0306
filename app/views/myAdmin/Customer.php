<?php
use App\Models\User;
$allUsers = new User();
$users = $allUsers->getAllUser();

?>
<section class="pt-5 pb-5" id='show-order'>
    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <p class="mb-5 text-center">
                    Có <i class="text-info font-weight-bold">
                        <?php echo count($users); ?>
                    </i> khách hàng đã ghé thăm DyLa
                </p>
                <table id="" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" style="width:15%">Mã khách</th>
                            <th scope="col" style="width:30%">Tài khoản khách</th>
                            <th scope="col" style="width:25%">Tên khách</th>
                            <th scope="col" style="width:30%">Số điện thoại khách</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo '<td scope="col" style="width:15%">' . $user->getId() . '</td>';
                            echo '<td scope="col" style="width:30%">' . $user->getUserName(). '</td>';
                            echo '<td scope="col" style="width:25%">' . $user->getFullName()  . '</td>';
                            echo '<td scope="col" style="width:30%">' . $user->getPhone()  . '</td>';
                        
                            echo '</tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>