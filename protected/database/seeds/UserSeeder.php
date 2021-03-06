<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=[
        ['name'=>'Agus Suhendar, S.Stat, M.Si','nip'=>'196301011988021001','email' =>'suhendar@bps.go.id','seksi_id'=>'0','level_id'=>'2','phone'=>'081349038851','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Kepala BPS','pangkat'=>'Pembina Tk. I (IV/b)'],
        ['name'=>'Suci Noviarti, SST','nip'=>'198711062010122001','email' =>'sucinoviarti@bps.go.id','seksi_id'=>'1','level_id'=>'4','phone'=>'085214936606','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Kepala Subbagian Tata Usaha','pangkat'=>'Penata (III/c)'],
        ['name'=>'Tuti Lestari, S.Si','nip'=>'198908262014032001','email' =>'tuti.lesatri@bps.go.id','seksi_id'=>'1','level_id'=>'5','phone'=>'085743610651','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Bendahara Pengeluaran','pangkat'=>'Penata Muda Tk. I (III/b)'],
        ['name'=>'R. Prima Deddy Iswahyudi, S.Si','nip'=>'198112042010031000','email' =>'primadi@bps.go.id','seksi_id'=>'5','level_id'=>'3','phone'=>'085349666999','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Kepala Seksi Statistik Sosial','pangkat'=>'Penata (III/c)'],
        ['name'=>'Nuur Rokhmat Hidayat, SST','nip'=>'199407292017011001','email' =>'nuur.hidayat@bps.go.id','seksi_id'=>'5','level_id'=>'7','phone'=>'089656330330','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Statistik Sosial','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Frida Setia Hidayah, SST','nip'=>'199503102018022001','email' =>'frida.setia@bps.go.id','seksi_id'=>'5','level_id'=>'7','phone'=>'085606676139','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Statistik Sosial','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Cinduane Gilang Fridarahma, S.ST','nip'=>'199010192014102001','email' =>'cinduane.gf@bps.go.id','seksi_id'=>'3','level_id'=>'6','phone'=>'085648959029','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Nerwilis','pangkat'=>'Penata Muda Tk. I (III/b)'],
        ['name'=>'Dhian Rizky Riga Permatasari, SST','nip'=>'199202022014122001','email' =>'dhian.riga@bps.go.id','seksi_id'=>'4','level_id'=>'6','phone'=>'085649222388','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Statistik Distribusi','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Cynthia Eka Yunitha, SST','nip'=>'199501172018022001','email' =>'cynthia.eka@bps.go.id','seksi_id'=>'4','level_id'=>'7','phone'=>'085693391908','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Statistik Distribusi','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Silli Hajjah Tarmulia, SST','nip'=>'199309262016022001','email' =>'silli.hajjah@bps.go.id','seksi_id'=>'6','level_id'=>'6','phone'=>'085251125185','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi IPDS','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Retno Cahyaningsih, SST','nip'=>'199406222017012001','email' =>'retno.cahyaningsih@bps.go.id','seksi_id'=>'6','level_id'=>'7','phone'=>'085743338010','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi IPDS','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Andaro Fransiando Saingan S.E.','nip'=>'198802082011011015','email' =>'andaro@bps.go.id','seksi_id'=>'2','level_id'=>'6','phone'=>'085249172171','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Kepala Seksi Statistik Produksi','pangkat'=>'Penata (III/c)'],
        ['name'=>'Andi Wahyu Prawoko, SST','nip'=>'199406272018021001','email' =>'andi.wahyu@bps.go.id','seksi_id'=>'6','level_id'=>'1','phone'=>'085729752700','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi IPDS','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Henny Anggraini, SE','nip'=>'198112242010032002','email' =>'henny.anggraini@bps.go.id','seksi_id'=>'7','level_id'=>'7','phone'=>'081254356281','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'KSK Danau Sembuluh','pangkat'=>'Penata Muda Tk. I (III/b)'],
        ['name'=>'Rawidin, SP','nip'=>'197712072011011003','email' =>'rawidin@bps.go.id','seksi_id'=>'7','level_id'=>'7','phone'=>'081351262111','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'KSK Seruyan Tengah','pangkat'=>'Penata Muda Tk. I (III/b)'],
        ['name'=>'Adiv Fahrur Anova, S.Si','nip'=>'198908032014031001','email' =>'adiv.anova@bps.go.id','seksi_id'=>'7','level_id'=>'7','phone'=>'085787774571','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'KSK Batu Ampar','pangkat'=>'Penata Muda Tk. I (III/b)'],
        ['name'=>'Hendro Sukendro, S.Si','nip'=>'198605042014031002','email' =>'hendro.sukendro@bps.go.id','seksi_id'=>'7','level_id'=>'7','phone'=>'085643661194','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'KSK Suling Tambun','pangkat'=>'Penata Muda Tk. I (III/b)'],
        ['name'=>'Yusriza Fahmi, S.Tr.Stat','nip'=>'199707112019011001','email' =>'yfahmi@bps.go.id','seksi_id'=>'2','level_id'=>'7','phone'=>'082375996008','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Statistik Produksi','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Moch Fatkurrozi Fadlullah, S.Tr.Stat','nip'=>'199601012019011001','email' =>'fatkurrozi@bps.go.id','seksi_id'=>'3','level_id'=>'7','phone'=>'082152715996','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Nerwilis','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Afti Zahrotin Nur, S.Si','nip'=>'199402212019032001','email' =>'afti.zn@bps.go.id','seksi_id'=>'2','level_id'=>'7','phone'=>'082335343367','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Staf Seksi Statistik Produksi','pangkat'=>'Penata Muda (III/a)'],
        ['name'=>'Subbagian TU','nip'=>'-','email' =>'tu@bps.go.id','seksi_id'=>'1','level_id'=>'6','phone'=>'-','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Subbagian Tata Usaha','pangkat'=>''],
        ['name'=>'Seksi Stat. Produksi','nip'=>'-','email' =>'produksi@bps.go.id','seksi_id'=>'2','level_id'=>'6','phone'=>'-','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Seksi Statistik Produksi','pangkat'=>''],
        ['name'=>'Seksi Nerwilis','nip'=>'-','email' =>'nerwilis@bps.go.id','seksi_id'=>'3','level_id'=>'6','phone'=>'-','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Seksi Nerwilis','pangkat'=>''],
        ['name'=>'Seksi Stat. Distribusi','nip'=>'-','email' =>'distribusi@bps.go.id','seksi_id'=>'4','level_id'=>'6','phone'=>'-','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Seksi Statistik Distribusi','pangkat'=>''],
        ['name'=>'Seksi Stat. Sosial','nip'=>'-','email' =>'sosial@bps.go.id','seksi_id'=>'5','level_id'=>'6','phone'=>'-','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Seksi Statistik Sosial','pangkat'=>''],
        ['name'=>'Seksi IPDS','nip'=>'-','email' =>'ipds@bps.go.id','seksi_id'=>'6','level_id'=>'6','phone'=>'-','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Seksi IPDS','pangkat'=>''],
        ['name'=>'Admin','nip'=>'-','email' =>'admin@bps.go.id','seksi_id'=>'0','level_id'=>'1','phone'=>'-','password'=>\Illuminate\Support\Facades\Hash::make('12345678'),'jabatan'=>'Admin','pangkat'=>''],
      ];

      foreach ($data as $dt)
      {
        (new \App\User())->create($dt);
      }
    }
}
