<div class="col-md-10">
	<h3>DATA PROJECT</h3>
	<div class="panel panel-primary">
		<div class="panel-heading">
			Project yang belum ada Desainnya
		</div>
		<div class="panel-body">
			<table class="table table-responsive table-striped table-bordered" id="data">
				<thead>
					<tr>
						<th class="ctr">No.</th>
						<th>No. Project</th>
						<th>Spesifikasi</th>
						<th class="ctr">Tanggal terima</th>
						<th class="ctr">Deltime</th>
						<th>Customer</th>
						<th class="ctr">Status</th>
						<th class="ctr">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php if ($projects > 0): ?>
					<?php foreach ($projects as $p): ?>
						<tr>
							<td class="ctr"><?php echo $no++; ?></td>
							<td><?php echo $p->no; ?></td>
							<td><?php echo $p->spesifikasi; ?></td>
							<td class="ctr"><?php echo $p->tanggal_terima; ?></td>
							<td class="ctr"><?php echo $p->deltime; ?></td>
							<td><?php echo $p->customer; ?></td>
							<td class="ctr"><?php echo $p->status; ?></td>
							<td class="ctr">
								<a href="<?php echo base_url('design/upload/'.$p->id); ?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Upload Design Project">Upload</a>
							</td>
						</tr>
					<?php endforeach ?>
				<?php endif ?>
				</tbody>
			</table>
		</div>
	</div>
</div>