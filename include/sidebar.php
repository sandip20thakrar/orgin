<aside class="sidebar col-lg-3 col-md-3 col-sm-3">
	<div class="row sidebar-box purple">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="sidebar-box-heading">
				<i class="icons icon-folder-open-empty"></i>
				<h4>Categories</h4>
			</div>
			<div class="sidebar-box-content">
				<ul><?php
											$chars =substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 50);
											$chars1 =substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 50)), 0, 50);
											?>
					<?php
					$query=$db->query("select * from category order by category.catename");
					while($row=$query->fetch_array()){
					?>
					<li><a href="singlesproduct.php?categoryid=<?php echo $chars1."-".$row['cateid']."-".$chars; ?>"><?php echo $row['catename']; ?><i class="icons icon-right-dir"></i></a>
					<ul class="sidebar-dropdown">
					<?php
					$query1=$db->query("select * from subcategory where categoryid='".$row['cateid']."'");
					while($row1=$query1->fetch_array()){
					?>
					<div class="col-md-4">
					
                                        	<li>
                                            	<ul>
                                                	<li><a href="singleproduct.php?categoryid=<?php echo $chars1."-".$row1['subcatid']."-".$chars; ?>"><?php echo $row1['subcatname']; ?></a></li>
                                                </ul>
                                            </li>
											</div>
										<?php } ?>
											</ul>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</aside>