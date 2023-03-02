<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<?php if ($report_id != '' && isset($_SESSION['admin_token'])) { ?>
	<input type="hidden" name="report_id" value="<?php echo $report_id; ?>">
	<input type="hidden" name="year_edit" value="<?php echo $year_edit; ?>">
	<input type="hidden" name="trial_edit" value="<?php echo $trial_slug; ?>">
	<input type="hidden" name="program_edit" value="<?php echo $program_slug; ?>">
	<input type="hidden" name="date_modify" value="<?php echo $date_modify; ?>">
<?php } ?>
<div class="row" id="showdetail">
	<div class="col">
		<table class="table text-center table-hover">
			<thead class="bg-primary text-white">
				<tr>
					<th></th>
					<th>Testing</th>
					<th width="15%">Principle/Method</th>
					<th width="15%">Instrument</th>
					<th width="15%">Reagent</th>
					<th>Result</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($infections as $key => $value) : ?>
					<tr>
						<td><?php echo $value->code; ?></td>
						<td><?php echo $value->name; ?></td>
						<td width="15%">
							<select class="form-control select-method" name="save[infection][<?php echo $value->id; ?>]">
								<option value="">choose</option>
								<?php $saved = json_decode($value->event, true); ?>
								<?php foreach ($tools_sec1 as $tool) : ?>
									<?php if (in_array($tool->code, $saved)) : ?>
										<option value="<?php echo $tool->code; ?>" <?php echo isset($save['infection'][$value->id]) && $save['infection'][$value->id] == $tool->code ? 'selected' : ''; ?>>
											<?php echo $tool->name; ?>
										</option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</td>
						<td width="15%">
							<select class="form-control" name="save[tool_sec2][<?php echo $value->id; ?>]">
								<option value="">choose</option>
								<?php foreach ($tools_sec2 as $tool) : ?>
									<option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool_sec2'][$value->id]) && $save['tool_sec2'][$value->id] == $tool->code ? 'selected' : ''; ?>><?php echo $tool->name; ?></option>
								<?php endforeach; ?>
							</select>
						</td>
						<td width="15%">
							<select class="form-control" name="save[tool_sec3][<?php echo $value->id; ?>]">
								<option value="">choose</option>
								<?php foreach ($tools_sec3 as $tool) : ?>
									<option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool_sec3'][$value->id]) && $save['tool_sec3'][$value->id] == $tool->code ? 'selected' : ''; ?>><?php echo $tool->name; ?></option>
								<?php endforeach; ?>
							</select>
						</td>
						<td>
							<?php  
								if(isset($result_remove) !== true){
									if(isset($save['result'][$value->id])){
										$result_value = $save['result'][$value->id];
									}else{
										$result_value = '';
									}
								}else{
									$result_value = '';
								}
							?>
							<!-- <input type="number" id="input_result" onchange="(function(el){el.value=parseFloat(el.value).toFixed(<?php echo $value->fix_decimal; ?>);})(this)" name="save[result][<?php echo $value->id; ?>]" value="<?php echo isset($save['result'][$value->id]) ? $save['result'][$value->id] : ''; ?>" step="0.01" class="form-control input"/> -->
							<input type="number" id="input_result" onchange="(function(el){el.value=parseFloat(el.value).toFixed(<?php echo $value->fix_decimal; ?>);})(this)" name="save[result][<?php echo $value->id; ?>]" value="<?php echo $value_status == "show" ? $result_value : ""; ?>" step="0.01" class="form-control input"/>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


<div class="row">
	<div class="col-sm-12 mb-2">
		<p><b>ข้อมูลผู้ส่ง</b></p>
	</div>
	<div class="col-sm-6 mb-2">
		<label for="">ชื่อ</label>
		<input type="text" class="form-control" id="name" name="save[name]" placeholder="ชื่อ" value="<?php echo $name; ?>" />
	</div>
	<div class="col-sm-3 mb-2">
		<label for="tel">หมายเลขโทรศัพท์</label>
		<input type="text" class="form-control" id="tel" name="save[telephone]" placeholder="หมายเลขโทรศัพท์" value="<?php echo $telephone; ?>" />
	</div>
	<div class="col-sm-3 mb-2">
		<label for="position">ตำแหน่ง</label>
		<input type="text" class="form-control" id="position" name="save[position]" placeholder="ตำแหน่ง" value="<?php echo $position; ?>" />
	</div>
	<div class="col-sm-12 mb-2">
		<label for="comment">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง </label>
		<textarea class="form-control" id="comment" name="save[comment]" placeholder="ความคิดเห็นเพิ่มเติม"><?php echo $comment; ?></textarea>
	</div>
	<div class="col-sm-3 mb-2">
		<label for="report_date">วันที่ทำการทดสอบ </label>
		<!-- <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo date('d-m-Y'); ?>" /> -->
		<input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo $report_date; ?>" />
	</div>
	<div class="col-sm-12 mb-2 text-center">
		<button class="btn btn-primary hidepreview" type="submit" id="btnsubmit">ส่งผลการตรวจ</button>
	</div>
</div>


</div>

</div>

<script>
	$(document).ready(function() {
        $(".select-method").change(function (e) {
        	if($(this).val() > 0){
        		$(this).parent().parent().find('.input').attr('required', 'required');
        	}else{
        		$(this).parent().parent().find('.input').removeAttr('required', 'required');
        	}
        });
        $(".input").keyup(function(event) {
        	console.log($(this).val());
        	if($(this).val() > 0){
        		$(this).parent().parent().find('.select-method').attr('required', 'required');
        	}else{
        		$(this).parent().parent().find('.select-method').removeAttr('required', 'required');
        	}
        });
	});
</script>