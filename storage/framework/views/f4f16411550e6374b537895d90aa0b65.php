<?php $__env->startSection('content'); ?>

<!-- start content page -->
<!--Start Mainbody Section-->   
<section class="details">

	<div class="details-number">

		<div class="details-list">

			<div class="number-sale">
				<ul>
					<li>
						<p>Number of Sales</p>
						<h3>1452</h3>
					</li>
					<li>
						<img src="./img/layergroup.png" />
					</li>
				</ul>
				<div class="percent">
					<span>-24%</span>
					<span>From Previous</span>
				</div>
			</div>

			<div class="number-sale">
				<ul>
					<li>
						<p>Sales Revenue</p>
						<h3>$38452</h3>
					</li>
					<li>
						<img src="./img/shop.png" />
					</li>
				</ul>
				<div class="percent">
					<span>-24%</span>
					<span>From Previous</span>
				</div>
			</div>

			<div class="number-sale">
				<ul>
					<li>
						<p>Average Price</p>
						<h3>$15.4</h3>
					</li>
					<li>
						<img src="./img/price.png" />
					</li>
				</ul>
				<div class="percent">
					<span>-24%</span>
					<span>From Previous</span>
				</div>
			</div>

			<div>
				<div>
					<canvas id="myChart" height="190px"></canvas>
				</div>                                            
			</div>

		</div>

		<div class="analytics">

			<div class="doughnut">
				<div>
					<canvas id="mydoughnut"></canvas>
				</div>
			</div>

			<div class="earning">
				<div class="report-title">
					<h5>Earning Reports</h5>
					
					<div class="report-option">
						<span class="topmenu"><i class="fa-solid fa-ellipsis-vertical"></i></span>

						<ul class="report-content topsub">
							<li><a href="javascript:void(0);">Sales Report</a></li>
							<li><a href="javascript:void(0);">Export Report</a></li>
							<li><a href="javascript:void(0);">Profit</a></li>
							<li><a href="javascript:void(0);">Action</a></li>
						</ul>
					</div>
				</div>

				<div class="total-earn">

					<div class="week-earn">

						<div class="skill">
							<div class="outer">
								<div class="inner"></div>
							</div>

							<svg width="90" height="90">  <!--80+80=160-->
								<circle cx="45" cy="45" r="35" fill="coral"></circle>   <!--40+30 = 70 (160+70 = 230)-->
							</svg>

						</div>

						<div class="earn-detail">
							<h5>Weekly Earnings</h5>
							<span>$2,523</span>
						</div>
					</div>

					<div class="month-earn">

						<div class="skill">
							<div class="outer">
								<div class="inner"></div>
							</div>

							<svg width="90" height="90">  <!--80+80=160-->
								<circle cx="45" cy="45" r="35" fill="coral"></circle>   <!--40+30 = 70 (160+70 = 230)-->
							</svg>

						</div>

						<div class="earn-detail">
							<h5>Monthly Earnings</h5>
							<span>$11,5235</span>
						</div>
					</div>

				</div>

			</div>

		</div>

	</div>

	<!--Start activities Section-->
<div class="activities">

	<!--Start Source-->
	<div class="sources">

		<div class="active-title">
			<h5>Sources</h5>

			<div class="report-option">
				<span class="topmenu"><i class="fa-solid fa-ellipsis-vertical"></i></span>

				<ul class="report-content topsub">
					<li><a href="javascript:void(0);">Sales Report</a></li>
					<li><a href="javascript:void(0);">Export Report</a></li>
					<li><a href="javascript:void(0);">Profit</a></li>
					<li><a href="javascript:void(0);">Action</a></li>
				</ul>
			</div>
		</div>

		<div class="total-source">
			<h5>Total sources</h5>
			<p>$ 7654</p>
			<span><i class="fa-solid fa-caret-up"></i> 2.2%</span>
		</div>

	</div>
	<!--End Source-->

	<!--Start recent-->
	<div>

	</div>
	<!--End recent-->

	<!--Start location-->
	<div>

	</div>
	<!--End location-->

</div>
<!--End activities Section-->
	
</section>
<!--End Mainbody Section-->
<!-- end content page -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/backend.admindashboardindex', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\team-project\resources\views/dashboards/index.blade.php ENDPATH**/ ?>