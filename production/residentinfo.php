<?php 
                      $recordperpage = 5;
                      if (isset($_GET['page']) && !empty($_GET['page'])) {
                        $currentpage = $_GET['page'];
                      }else{
                        $currentpage = 1;
                      }

                      $startfrom = ($currentpage * $recordperpage) - $recordperpage;
                      $select = mysqli_query($dbcon,"SELECT * FROM tblresident WHERE CivilStatus != '' ");
                      $totalrecords = mysqli_num_rows($select);
                      $firstpage = 1;
                      $nextpage = $currentpage + 1;
                      $previouspage = $currentpage -1;
                      $lastpage = ceil($totalrecords/$recordperpage);


                        $residents=mysqli_query($dbcon,"SELECT * FROM `tblresident` WHERE CivilStatus != '' LIMIT $startfrom, $recordperpage");
                        while($row= mysqli_fetch_assoc($residents)){?>
                          <tr>
                             <td><input type='checkbox' name='SelectedId[]' value='<?php echo $row['id']; ?>'></td>
                             <td><?php echo $row['id']; ?></td>
                             <?php 
                                $count = strlen($row['Picture']);
                                if ($count < 100) {?>
                                <td><img class="image" src="image/<?php echo $row['Picture'] ?>"></td>
                              <?php
                                }else{?>
                                <td><img class="image" src="<?php echo $row['Picture'] ?>"></td>
                              <?php
                                }
                              ?>
                             <td><?php echo $row['FirstName'] ." ". $row['LastName']; ?></td>
                             <td><?php echo $row['Age']; ?></td>
                             <td><?php echo $row['Gender']; ?></td>
                             <td><?php echo $row['Purok']; ?></td>
                             <td><a href="info.php?id=<?php echo $row['id']; ?>">Show Details</a></td>
                          </tr>
                    <?php
                        }

                    ?>