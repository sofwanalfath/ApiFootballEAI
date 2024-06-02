<?php
    require __DIR__ . '/../api/api_get_standings.php';
?>

<div class="bg-white mt-14">
    <table class="table table-bordered" >
    <thead class="table table-dark">

            <tr class="text-center">
                <th scope="col" >Position</th>
                <th scope="col" >Club</th>
                <th scope="col" >Play</th>
                <th scope="col" >Win</th>
                <th scope="col" >Draw</th>
                <th scope="col" >Lose</th>
                <th scope="col" >Point</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($response as $country): ?>
                <tr>
                    <td class="text-center"><?php echo $country['overall_league_position']; ?></td>
                    <td>
                        <img src="<?php echo $country['team_badge']; ?>" alt="Logo team" width="50px">
                        <?php echo $country['team_name']; ?>
                    
                    </td>
                    <td class="text-center"><?php echo $country['overall_league_payed']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_W']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_D']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_L']; ?></td>
                    <td class="text-center"><?php echo $country['overall_league_PTS']; ?></td>
                </tr>
            <?php endforeach; ?>            
        </tbody>
    </table>
</div>