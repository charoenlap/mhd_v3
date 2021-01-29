<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row" id="showdetail">
	<div class="col s12">
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
					<td><?php echo $value->code;?></td>
					<td><?php echo $value->name;?></td>
					<td width="15%">
						<select class="form-control">
							<option value="">choose</option>
							<?php $saved = json_decode($value->event, true); ?>
							<?php foreach($tools_sec1 as $tool): ?>
								<?php if (in_array($tool->code, $saved)) : ?>
									<option value="<?php echo $tool->code;?>"><?php echo $tool->name;?></option>
								<?php endif; ?>
							<?php endforeach;?>
						</select>
					</td>
					<td width="15%">
						<select class="form-control">
							<option value="">choose</option>
							<?php foreach($tools_sec2 as $tool): ?>
							<option value="<?php echo $tool->code;?>"><?php echo $tool->name;?></option>
							<?php endforeach;?>
						</select>
					</td>
					<td width="15%">
						<select class="form-control">
							<option value="">choose</option>
							<?php foreach($tools_sec3 as $tool): ?>
							<option value="<?php echo $tool->code;?>"><?php echo $tool->name;?></option>
							<?php endforeach;?>
						</select>
					</td>
					<td>
						<input type="number" onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)" name="result_2[1]" value="" step="0.01" class="form-control" />
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
		<div class="font-weight-bold" style="padding-top: 30px; padding-bottom: 10px;"> ข้อมูลผู้ส่ง </div>
		<div class="form-row">
			<div class="form-group col-md-5">
				<label for="name_lname">ชื่อ</label>
				<input type="text" class="form-control" id="name_lname" name="name_lname" placeholder="ชื่อ">
			</div>
			<div class="form-group col-md-3">
				<label for="tel">หมายเลขโทรศัพท์</label>
				<input type="text" class="form-control" id="tel" name="tel" placeholder="หมายเลขโทรศัพท์">
			</div>
			<div class="form-group col-md-4">
				<label for="position">ตำแหน่ง</label>
				<input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง">
			</div>
		</div>
		<div class="font-weight-bold" style="padding-top: 30px;">
			<label for="comment">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง </label>
			<textarea class="form-control" id="comment" name="comment" placeholder="ความคิดเห็นเพิ่มเติม"></textarea>
		</div>
		<div class="font-weight-bold container-left" style="padding-top: 30px;">
			<label for="report_date">วันที่ทำการทดสอบ </label>
			<input type="date" class="form-control" style="width: 180px;" id="report_date" name="report_date"
				value="<?php echo date('Y-m-d'); ?>"></input>
		</div>
		<div class="form-gruop text-center" style="margin-top: 30px;">
			<input class="btn btn-primary" type="button" onclick="window.print()" name="printPageButton" id="printPageButton"
				name="printPageButton" value="พิมพ์" style="width: 60px;"></input>
			<button class="btn btn-primary" name="submit" type="submit" value="preview" id="btnpreview">พรีวิว</button>
			<button class="btn btn-primary" name="submit" type="submit" value="accept"
				id="btnsubmit">ยืนยันการส่งผลการตรวจ</button>
		</div>
	</div>

</div>