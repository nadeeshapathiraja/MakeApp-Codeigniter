
				<div class="col-md-10">
					<div class="well">
                    <h1><?=$name?></h1>
                    <p><?=$age?></p>
                        <h3>Members Page</h3>
                        <hr/>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>OPTION</th>
                            </tr>

                            <?php foreach ($members as $member) :?>

                            <tr>
                                <td><?=$member->id ?></td>
                                <td><?=$member->name ?></td>
                                <td><?=$member->email ?></td>
                                <td>
                                    <a href="<?=base_url()?>index.php/member/view/<?=$member->id ?>">VIEW</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                            
                        </table>
                        
                    </div>
				</div>

			