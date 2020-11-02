<div class="row">
    <div class="col-lg">


        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center mt-10">
                    <div class="col-md-10">
                        <form action="<?php echo base_url('User/insertTrans'); ?>" method="post">

                            <div class="form-group">
                                <input type="hidden" name="id_s" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lokasi</label>
                                <input type="text" name="title" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Pengunjung</label>
                                <input type="text" name="jp" id="jp" class="form-control" value="">
                            </div>

                            <div class="form-group">
                                <label for="">Total Harga</label>
                                <input type="text" name="total" id="total" class="form-control" value="">
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Kunjungan</label>
                                <input type="date" name="is_active" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Kecendrungan Alergi</label>
                                <div class="y"><input type='radio' name='jenis_kelamin' value='0' c /> Yas</div>
                                <div class="n"><input type='radio' name='jenis_kelamin' checked='checked' value='1' /> No</div>
                            </div>

                            <div class="tampil"><input type="text" name="y" /></div>
                            <div class="form-group">
                                <label for="">Makanan</label>
                                <div class="v"><input type='radio' name='makanan' value='0' c /> Vagetarian</div>
                                <div class="nv"><input type='radio' name='makanan' checked='checked' value='1' /> Non Vagetarian</div>
                            </div>
                            <div class="form-group">
                                <span class="badge badge-success" id="sg">Show Guide</span>
                                <span class="badge badge-success" id="hg">Hide Guide</span>

                                <div class="guide">
                                    <br>

                                    <table class="table table-striped" border="0" cellspacing="0" cellspading="0">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Guide</th>
                                            <th>Nomor Hp</th>
                                            <th>Email</th>
                                            <th>Guide Rate</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th>Pilih</th>
                                        </tr>

                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($guide as $g) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $g['nama_guide']; ?></td>
                                                    <td><?= $g['no_hp']; ?></td>
                                                    <td><?= $g['email']; ?></td>
                                                    <td><?= $g['guide_rate']; ?></td>
                                                    <td><img src="<?php echo base_url('assets/img/' . $g['foto_profile']) ?>" height="60" width="60" /></td>
                                                    <td><?= $g['status']; ?></td>
                                                    <td>
                                                        <div class="n"><input type='radio' name='pilih_guide' value='<?= $g['id_guide']; ?>' /></div>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <input type="submit" class="btn btn-primary" value="Submit" />

                            <button type="reset" class="btn btn-danger" onclick="Cancel('cancel');">Cancel</button>
                            <br>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>
<br>
<br>