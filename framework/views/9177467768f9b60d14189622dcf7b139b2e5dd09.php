<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Member Card</title>

    <style>
        .box {
            position: relative;
        }
        .card {
            width: 85.60mm;
        }
        .logo {
            position: absolute;
            top: 3pt;
            right: 0pt;
            font-size: 16pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #fff !important;
        }
        .logo p {
            text-align: right;
            margin-right: 16pt;
        }
        .logo img {
            position: absolute;
            margin-top: -5pt;
            width: 40px;
            height: 40px;
            right: 16pt;
        }
        .nama {
            position: absolute;
            top: 100pt;
            right: 16pt;
            font-size: 12pt;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #fff !important;
        }
        .telepon {
            position: absolute;
            margin-top: 120pt;
            right: 16pt;
            color: #fff;
        }
        .barcode {
            position: absolute;
            top: 105pt;
            left: .860rem;
            border: 1px solid #fff;
            padding: .5px;
            background: #fff;
        }
        .text-left {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <section style="border: 1px solid #fff">
        <table width="100%">
            <?php $__currentLoopData = $datamember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td class="text-center">
                            <div class="box">
                                <img src="<?php echo e(public_path($setting->path_kartu_member)); ?>" alt="card" width="50%">
                                <div class="logo">
                                    <p><?php echo e($setting->nama_perusahaan); ?></p>
                                    <img src="<?php echo e(public_path($setting->path_logo)); ?>" alt="logo">
                                </div>
                                <div class="nama"><?php echo e($item->nama); ?></div>
                                <div class="telepon"><?php echo e($item->telepon); ?></div>
                                <div class="barcode text-left">
                                    <img src="data:image/png;base64, <?php echo e(DNS2D::getBarcodePNG("$item->kode_member", 'QRCODE')); ?>" alt="qrcode"
                                        height="45"
                                        widht="45">
                                </div>
                            </div>
                        </td>
                        
                        <?php if(count($datamember) == 1): ?>
                        <td class="text-center" style="width: 50%;"></td>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </section>
</body>
</html><?php /**PATH E:\codeastro\Laravel\PointofSale-Laravel\resources\views/member/cetak.blade.php ENDPATH**/ ?>