<div id="profesor-list">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<!-- List 1 -->
		<?php
			$edunova_mentor_list_name1 = get_post_meta(get_the_ID(), 'mentor-meta-list-name1', true);
			$edunova_mentor_list_text1 = get_post_meta(get_the_ID(), 'mentor-list-info1', true);
			if(!empty($edunova_mentor_list_name1) || !empty($edunova_mentor_list_text1)) {
				echo '<div class="panel panel-default">
						<div class="panel-detail"></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<div class="panel-heading" role="tab" id="headingOne">
								<div class="panel-title">
									<h2>' . $edunova_mentor_list_name1 . '</h2>
									<span>Predavač</span>
								</div>
							</div>
						</a>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="panel-detail"></div>
								' . $edunova_mentor_list_text1 . '
							</div>
						</div>
					</div>';
			} else {
				echo '';
			}
		?>
		<!-- List 2 -->
		<?php
			$edunova_mentor_list_name2 = get_post_meta(get_the_ID(), 'mentor-meta-list-name2', true);
			$edunova_mentor_list_text2 = get_post_meta(get_the_ID(), 'mentor-list-info2', true);
			if(!empty($edunova_mentor_list_name2) || !empty($edunova_mentor_list_text2)) {
				echo '<div class="panel panel-default">
						<div class="panel-detail"></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<div class="panel-heading" role="tab" id="headingTwo">
								<div class="panel-title">
									<h2>' . $edunova_mentor_list_name2 . '</h2>
									<span>Predavač</span>
								</div>
							</div>
						</a>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<div class="panel-detail"></div>
								' . $edunova_mentor_list_text2 . '
							</div>
						</div>
					</div>';
			} else {
				echo '';
			}
		?>
		<!-- List 3 -->
		<?php
			$edunova_mentor_list_name3 = get_post_meta(get_the_ID(), 'mentor-meta-list-name3', true);
			$edunova_mentor_list_text3 = get_post_meta(get_the_ID(), 'mentor-list-info3', true);
			if(!empty($edunova_mentor_list_name3) || !empty($edunova_mentor_list_text3)) {
				echo '<div class="panel panel-default">
						<div class="panel-detail"></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							<div class="panel-heading" role="tab" id="headingThree">
								<div class="panel-title">
									<h2>' . $edunova_mentor_list_name3 . '</h2>
									<span>Predavač</span>
								</div>
							</div>
						</a>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<div class="panel-detail"></div>
								' . $edunova_mentor_list_text3 . '
							</div>
						</div>
					</div>';
			} else {
				echo '';
			}
		?>
		<!-- List 4 -->
		<?php
			$edunova_mentor_list_name4 = get_post_meta(get_the_ID(), 'mentor-meta-list-name4', true);
			$edunova_mentor_list_text4 = get_post_meta(get_the_ID(), 'mentor-list-info4', true);
			if(!empty($edunova_mentor_list_name4) || !empty($edunova_mentor_list_text4)) {
				echo '<div class="panel panel-default">
						<div class="panel-detail"></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
							<div class="panel-heading" role="tab" id="headingFour">
								<div class="panel-title">
									<h2>' . $edunova_mentor_list_name4 . '</h2>
									<span>Predavač</span>
								</div>
							</div>
						</a>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<div class="panel-detail"></div>
								' . $edunova_mentor_list_text4 . '
							</div>
						</div>
					</div>';
			} else {
				echo '';
			}
		?>
		<!-- List 5 -->
		<?php
			$edunova_mentor_list_name5 = get_post_meta(get_the_ID(), 'mentor-meta-list-name5', true);
			$edunova_mentor_list_text5 = get_post_meta(get_the_ID(), 'mentor-list-info5', true);
			if(!empty($edunova_mentor_list_name5) || !empty($edunova_mentor_list_text5)) {
				echo '<div class="panel panel-default">
						<div class="panel-detail"></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
							<div class="panel-heading" role="tab" id="headingFive">
								<div class="panel-title">
									<h2>' . $edunova_mentor_list_name5 . '</h2>
									<span>Predavač</span>
								</div>
							</div>
						</a>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body">
								<div class="panel-detail"></div>
								' . $edunova_mentor_list_text5 . '
							</div>
						</div>
					</div>';
			} else {
				echo '';
			}
		?>
		<!-- List 6 -->
		<?php
			$edunova_mentor_list_name6 = get_post_meta(get_the_ID(), 'mentor-meta-list-name6', true);
			$edunova_mentor_list_text6 = get_post_meta(get_the_ID(), 'mentor-list-info6', true);
			if(!empty($edunova_mentor_list_name6) || !empty($edunova_mentor_list_text6)) {
				echo '<div class="panel panel-default">
						<div class="panel-detail"></div>
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
							<div class="panel-heading" role="tab" id="headingSix">
								<div class="panel-title">
									<h2>' . $edunova_mentor_list_name6 . '</h2>
									<span>Predavač</span>
								</div>
							</div>
						</a>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
							<div class="panel-body">
								<div class="panel-detail"></div>
								' . $edunova_mentor_list_text6 . '
							</div>
						</div>
					</div>';
			} else {
				echo '';
			}
		?>
	</div>
</div>