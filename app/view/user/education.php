<div class="container">
    <?php 
        echo'<h1>opleiding: '.$data['opleidingname'].'</h1>';
    ?>
    <div class="animated fadeInRight" style="-webkit-animation-delay: 0.5s;">
        <table class="responsive-table striped">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Achternaam</th>
                    <th>Activiteit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>
                        <?php
                            echo'
                                <a title="delete" href="/user/opleidingen/delete/'. $key['userid']. '"><i class="material-icons" style="color:#ff3d00;">delete</i></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a title="wijzigen" href="/user/opleidingen/wijzig/'. $key['userid']. '"><i class="material-icons" style="color:#ffab40;">mode_edit</i></a>
                            ';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                    <td>
                        <?php
                            echo'
                                <a title="delete" href="/user/opleidingen/delete/'. $key['userid']. '"><i class="material-icons" style="color:#ff3d00;">delete</i></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a title="wijzigen" href="/user/opleidingen/wijzig/'. $key['userid']. '"><i class="material-icons" style="color:#ffab40;">mode_edit</i></a>
                            ';
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                    <td>
                        <?php
                            echo'
                                <a title="delete" href="/user/opleidingen/delete/'. $key['userid']. '"><i class="material-icons" style="color:#ff3d00;">delete</i></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a title="wijzigen" href="/user/opleidingen/wijzig/'. $key['userid']. '"><i class="material-icons" style="color:#ffab40;">mode_edit</i></a>
                                ';
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
