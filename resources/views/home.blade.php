@extends('layouts.main')

@section('container')

    </div>
    <div class="row abouts">
        {{-- <div class="row images-abouts myimgDiv">
            <img src="{{ asset('images/img-about.jpg') }}" height="250px" width="250px">
        </div> --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="waves-top2" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;z-index:1;position:relative" width="1366" height="305" preserveAspectRatio="xMidYMid" viewBox="0 0 1366 305">
          <g transform="translate(683,152.5) scale(1,-1) translate(-683,-152.5)"><linearGradient id="lg-0.8073900412888001" x1="0" x2="1" y1="0" y2="0">
            <stop stop-color="#00344e" offset="0"></stop>
            <stop stop-color="#b76100" offset="1"></stop>
          </linearGradient><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="0s" values="M0 0L 0 293.29363983007545Q 170.75 253.24097190058765  341.5 238.71053244399928T 683 205.8166917412166T 1024.5 152.0156635676919T 1366 99.1333886828242L 1366 0 Z;M0 0L 0 293.96033473835485Q 170.75 281.08669867811324  341.5 238.35779697233147T 683 198.77985342253703T 1024.5 165.58640324170958T 1366 155.6461013184912L 1366 0 Z;M0 0L 0 288.3853844094819Q 170.75 286.5243963021454  341.5 254.01578341333487T 683 167.73636771117208T 1024.5 136.0061930923727T 1366 100.07883765894024L 1366 0 Z;M0 0L 0 293.29363983007545Q 170.75 253.24097190058765  341.5 238.71053244399928T 683 205.8166917412166T 1024.5 152.0156635676919T 1366 99.1333886828242L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-0.8333333333333334s" values="M0 0L 0 275.97595172863413Q 170.75 250.57664292640405  341.5 225.98293203289785T 683 214.5268791474584T 1024.5 165.2610747318161T 1366 107.51547414686868L 1366 0 Z;M0 0L 0 289.5174711555223Q 170.75 265.36148487306997  341.5 247.944186758793T 683 186.4071323033112T 1024.5 193.19711223360133T 1366 132.94601679925265L 1366 0 Z;M0 0L 0 299.2083263783238Q 170.75 252.12902879078695  341.5 209.4575509546971T 683 212.5261580649082T 1024.5 185.8880358006979T 1366 143.50887070654278L 1366 0 Z;M0 0L 0 275.97595172863413Q 170.75 250.57664292640405  341.5 225.98293203289785T 683 214.5268791474584T 1024.5 165.2610747318161T 1366 107.51547414686868L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-1.6666666666666667s" values="M0 0L 0 291.8334092396908Q 170.75 279.2539750563339  341.5 259.59135413188443T 683 211.40860575875047T 1024.5 183.4737659689094T 1366 108.07207223090978L 1366 0 Z;M0 0L 0 296.00724427902935Q 170.75 257.7216019332607  341.5 229.18898148793627T 683 222.37801402829513T 1024.5 153.4065545603521T 1366 123.04243884739503L 1366 0 Z;M0 0L 0 251.02727528343183Q 170.75 302.546908728213  341.5 262.20692732674524T 683 202.1343874898089T 1024.5 143.63002258056449T 1366 133.29242657459622L 1366 0 Z;M0 0L 0 291.8334092396908Q 170.75 279.2539750563339  341.5 259.59135413188443T 683 211.40860575875047T 1024.5 183.4737659689094T 1366 108.07207223090978L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-2.5s" values="M0 0L 0 272.41913818553917Q 170.75 264.1533428561351  341.5 231.25128214236813T 683 185.95630865400977T 1024.5 172.4050614562129T 1366 122.87748905065837L 1366 0 Z;M0 0L 0 263.23369395104584Q 170.75 231.7116004527656  341.5 215.26624889085974T 683 219.34358859825392T 1024.5 174.63930034265604T 1366 106.63344852978588L 1366 0 Z;M0 0L 0 250.2765617643228Q 170.75 270.68174808778315  341.5 238.19914671064018T 683 176.97545321786544T 1024.5 194.95820580603126T 1366 125.66550425645465L 1366 0 Z;M0 0L 0 272.41913818553917Q 170.75 264.1533428561351  341.5 231.25128214236813T 683 185.95630865400977T 1024.5 172.4050614562129T 1366 122.87748905065837L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-3.3333333333333335s" values="M0 0L 0 285.0852398252714Q 170.75 268.5149817980124  341.5 232.65791973527257T 683 169.35384269034313T 1024.5 126.17219823533915T 1366 95.51868411865038L 1366 0 Z;M0 0L 0 301.16499662162386Q 170.75 247.1806053137305  341.5 217.29396415292615T 683 203.03383042098824T 1024.5 197.19724421757374T 1366 141.68956613916674L 1366 0 Z;M0 0L 0 276.9017157281576Q 170.75 264.50605162199446  341.5 228.67008338395024T 683 211.42897114407924T 1024.5 187.00763029551953T 1366 151.32124729318826L 1366 0 Z;M0 0L 0 285.0852398252714Q 170.75 268.5149817980124  341.5 232.65791973527257T 683 169.35384269034313T 1024.5 126.17219823533915T 1366 95.51868411865038L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-4.166666666666667s" values="M0 0L 0 298.2827155833514Q 170.75 274.28649910316324  341.5 241.42837370584405T 683 207.46841467359252T 1024.5 188.65371976105058T 1366 161.6716143291126L 1366 0 Z;M0 0L 0 283.4401999108243Q 170.75 268.6427911839368  341.5 243.95526368170766T 683 214.80358718185184T 1024.5 138.1322964327273T 1366 109.90099919716792L 1366 0 Z;M0 0L 0 264.70822120893183Q 170.75 274.4467634375575  341.5 233.16010323477036T 683 209.79101752768696T 1024.5 143.7510642784474T 1366 141.378097974547L 1366 0 Z;M0 0L 0 298.2827155833514Q 170.75 274.28649910316324  341.5 241.42837370584405T 683 207.46841467359252T 1024.5 188.65371976105058T 1366 161.6716143291126L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-5s" values="M0 0L 0 249.711564804174Q 170.75 245.61295216543408  341.5 218.94251224381082T 683 224.64788988430513T 1024.5 189.72723501554273T 1366 133.34906215825097L 1366 0 Z;M0 0L 0 285.8498553099347Q 170.75 301.9323259766286  341.5 262.2406065658822T 683 186.91340846120175T 1024.5 146.6706875210206T 1366 148.78621604340555L 1366 0 Z;M0 0L 0 262.939320916292Q 170.75 305.2922214063613  341.5 261.7767026023379T 683 211.35419341495805T 1024.5 148.03258063362836T 1366 163.03635252579954L 1366 0 Z;M0 0L 0 249.711564804174Q 170.75 245.61295216543408  341.5 218.94251224381082T 683 224.64788988430513T 1024.5 189.72723501554273T 1366 133.34906215825097L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-5.833333333333334s" values="M0 0L 0 282.1965051184483Q 170.75 264.04533596651777  341.5 238.72889701656112T 683 211.5462160502189T 1024.5 187.19849356962752T 1366 148.530167364152L 1366 0 Z;M0 0L 0 258.7001512029496Q 170.75 273.1901162078287  341.5 246.70067817688283T 683 201.1077344938725T 1024.5 194.27162760272566T 1366 123.52286528064221L 1366 0 Z;M0 0L 0 279.9061634818976Q 170.75 270.3585328694839  341.5 238.0847588699032T 683 202.898490069057T 1024.5 151.69553965182342T 1366 144.36798698353678L 1366 0 Z;M0 0L 0 282.1965051184483Q 170.75 264.04533596651777  341.5 238.72889701656112T 683 211.5462160502189T 1024.5 187.19849356962752T 1366 148.530167364152L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-6.666666666666667s" values="M0 0L 0 274.80676535434645Q 170.75 275.17234951223895  341.5 235.7654646980163T 683 188.53225905831806T 1024.5 141.75427813638538T 1366 133.48116971809466L 1366 0 Z;M0 0L 0 277.1813954802968Q 170.75 279.68861300326375  341.5 260.62758517195886T 683 202.50712722328672T 1024.5 152.4511067245898T 1366 168.58044402394685L 1366 0 Z;M0 0L 0 276.50737795122535Q 170.75 269.2412386600481  341.5 236.93623443223817T 683 207.3716739157491T 1024.5 147.45089962881994T 1366 157.7152143786935L 1366 0 Z;M0 0L 0 274.80676535434645Q 170.75 275.17234951223895  341.5 235.7654646980163T 683 188.53225905831806T 1024.5 141.75427813638538T 1366 133.48116971809466L 1366 0 Z"></animate>
          </path><path d="" fill="url(#lg-0.8073900412888001)" opacity="0.4">
            <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-7.5s" values="M0 0L 0 282.4579603953965Q 170.75 289.88528595715735  341.5 245.54248494703992T 683 188.37759027736536T 1024.5 144.28760402262733T 1366 127.75765062676109L 1366 0 Z;M0 0L 0 297.48427764323503Q 170.75 271.73918231938757  341.5 245.04699898560733T 683 228.37660657648027T 1024.5 191.2577859963468T 1366 128.7895713809359L 1366 0 Z;M0 0L 0 270.18067043712045Q 170.75 243.91076580099804  341.5 226.67095891705205T 683 174.39112071469296T 1024.5 177.82864998470123T 1366 147.44853380245922L 1366 0 Z;M0 0L 0 282.4579603953965Q 170.75 289.88528595715735  341.5 245.54248494703992T 683 188.37759027736536T 1024.5 144.28760402262733T 1366 127.75765062676109L 1366 0 Z"></animate>
          </path></g>
</svg>

        <div class="row">
            <div class=" aboutus col-lg-12 col-md-12 col-sm-12">
                <h1 class="text-center aboutus-title">About Us</h1>
                <p style="text-align: justify"><span style="margin-left: 40px">HMIF</span> Adalah organisasi mahasiswa informatika Institut Teknologi Indonesia. HMIF memiliki workshop yang bertempat di dalam kampus Institut Teknologi Indonesia yang beralamat di Jl. Puspitek, Setu, Kec. Serpong, Kota Tangerang Selatan, Banten 15314. <br> <span style="margin-left: 40px">Organisasi </span>mahasiswa ini bertujuan untuk membentuk softskill maupun hardskill dari mahasiswa Informatika ITI. Segi softskill yang di asah antara lain yaitu keorganisasian,proposal, birokrasi, dsb. Segi hardskill yang di asah antara lain yaitu pengadaan pelatihan tentang UI/UX, Database, Web design, dsb.
                </p>
            </div>
        </div>
    {{-- <div class="row vismis d-flex justify-content-center ">
        <div class="visi col-lg-6 col-md-6 col-sm-12">
            <h1 class="text-center visi-title">Visi</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, labore minima! Vitae, quos nemo iure necessitatibus vel laborum suscipit sunt! Sed, deleniti? Accusantium, eligendi dolores.</p>
        </div>
        <div class="misi col-lg-6 col-md-6 col-sm-12">
            <h1 class="text-center misi-title">Misi</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nihil, quas sit doloremque delectus eligendi earum alias, nesciunt laborum officiis, incidunt minus corrupti maiores quos.</p>
        </div>
    </div> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg" class="waves-bottom" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;display:block;z-index:1;position:relative" width="1366" height="295" preserveAspectRatio="xMidYMid" viewBox="0 0 1366 295">
  <g transform="translate(683,147.5) scale(1,-1) translate(-683,-147.5)"><linearGradient id="lg-0.2432595678728553" x1="0" x2="1" y1="0" y2="0">
    <stop stop-color="#cf800b" offset="0"></stop>
    <stop stop-color="#073985" offset="1"></stop>
  </linearGradient><path d="" fill="url(#lg-0.2432595678728553)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="0s" values="M0 0L 0 204.60512746402264Q 136.6 192.3385772004216  273.2 167.5742227926655T 546.4 155.98063390063723T 819.6 133.36381890254324T 1092.8 90.6780751339831T 1366 69.21296157283672L 1366 0 Z;M0 0L 0 225.02342628231455Q 136.6 204.1681424840565  273.2 179.76165498790274T 546.4 152.12317395338877T 819.6 96.0533868563951T 1092.8 80.44081326986154T 1366 28.584578852987335L 1366 0 Z;M0 0L 0 201.0317081626381Q 136.6 210.54963035327262  273.2 179.59098924908622T 546.4 135.9981585107584T 819.6 109.75155896286263T 1092.8 75.2494057441566T 1366 51.031347885160415L 1366 0 Z;M0 0L 0 204.60512746402264Q 136.6 192.3385772004216  273.2 167.5742227926655T 546.4 155.98063390063723T 819.6 133.36381890254324T 1092.8 90.6780751339831T 1366 69.21296157283672L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.2432595678728553)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-2s" values="M0 0L 0 197.5724608503799Q 136.6 209.00573397089707  273.2 166.82885004748042T 546.4 155.91550652946682T 819.6 113.9999991446994T 1092.8 71.25760314709953T 1366 55.22324352863592L 1366 0 Z;M0 0L 0 205.60833206998606Q 136.6 212.96785043500938  273.2 181.65427428509193T 546.4 132.88862238358297T 819.6 114.41081404165472T 1092.8 65.34447216073906T 1366 59.025041203364026L 1366 0 Z;M0 0L 0 196.6300025290439Q 136.6 238.61868435857616  273.2 198.89715641002087T 546.4 165.74360681521432T 819.6 128.7238001704036T 1092.8 89.33020295606332T 1366 59.56271877203983L 1366 0 Z;M0 0L 0 197.5724608503799Q 136.6 209.00573397089707  273.2 166.82885004748042T 546.4 155.91550652946682T 819.6 113.9999991446994T 1092.8 71.25760314709953T 1366 55.22324352863592L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.2432595678728553)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-4s" values="M0 0L 0 203.04527321590504Q 136.6 220.5741323279685  273.2 199.62128217432465T 546.4 157.73590098434414T 819.6 112.53258392217747T 1092.8 101.72642428582355T 1366 57.96055465991779L 1366 0 Z;M0 0L 0 207.33776015618372Q 136.6 205.10203073692296  273.2 169.63562289635826T 546.4 161.21004291232498T 819.6 123.15081040075268T 1092.8 87.88569175723508T 1366 83.09987808944535L 1366 0 Z;M0 0L 0 218.69153628660405Q 136.6 215.95595361563915  273.2 198.06971910572673T 546.4 140.4996152767336T 819.6 114.97157327770753T 1092.8 79.63874378542944T 1366 53.37134935373177L 1366 0 Z;M0 0L 0 203.04527321590504Q 136.6 220.5741323279685  273.2 199.62128217432465T 546.4 157.73590098434414T 819.6 112.53258392217747T 1092.8 101.72642428582355T 1366 57.96055465991779L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.2432595678728553)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-6s" values="M0 0L 0 197.25159889341634Q 136.6 236.23683698992096  273.2 184.13419269650248T 546.4 156.1648770039165T 819.6 121.58961983715145T 1092.8 113.28109452013709T 1366 82.05474824483557L 1366 0 Z;M0 0L 0 223.72028791483268Q 136.6 200.54274360518707  273.2 164.9673497395089T 546.4 167.149862525321T 819.6 111.84237678343217T 1092.8 88.38798595901474T 1366 65.90490975036477L 1366 0 Z;M0 0L 0 203.79219674627606Q 136.6 194.42174832735097  273.2 167.87942518927807T 546.4 153.25395350146488T 819.6 117.18685704582423T 1092.8 89.81997058282444T 1366 50.23713579699583L 1366 0 Z;M0 0L 0 197.25159889341634Q 136.6 236.23683698992096  273.2 184.13419269650248T 546.4 156.1648770039165T 819.6 121.58961983715145T 1092.8 113.28109452013709T 1366 82.05474824483557L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.2432595678728553)" opacity="0.4">
    <animate attributeName="d" dur="10s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-8s" values="M0 0L 0 205.96825949102282Q 136.6 222.48455110610882  273.2 182.85066344251095T 546.4 141.8274513988813T 819.6 127.92184949413594T 1092.8 84.0384787396556T 1366 76.74229224499862L 1366 0 Z;M0 0L 0 227.85643269038644Q 136.6 189.9829448352611  273.2 171.41795665994525T 546.4 140.31545545980788T 819.6 105.64465600361268T 1092.8 90.9014613512141T 1366 55.272976412716645L 1366 0 Z;M0 0L 0 201.84133020429064Q 136.6 221.11931494789388  273.2 195.15440881904766T 546.4 151.8231733993233T 819.6 142.79956647684952T 1092.8 108.98962276077157T 1366 80.46848892801023L 1366 0 Z;M0 0L 0 205.96825949102282Q 136.6 222.48455110610882  273.2 182.85066344251095T 546.4 141.8274513988813T 819.6 127.92184949413594T 1092.8 84.0384787396556T 1366 76.74229224499862L 1366 0 Z"></animate>
  </path></g>
</svg> --}}
<svg xmlns="http://www.w3.org/2000/svg" class="waves-bottom2" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;z-index:1;position:relative" width="1366" height="305" preserveAspectRatio="xMidYMid" viewBox="0 0 1366 305">
  <g transform="translate(683,152.5) scale(1,1) translate(-683,-152.5)"><linearGradient id="lg-0.1935001013680243" x1="0" x2="1" y1="0" y2="0">
    <stop stop-color="#00344e" offset="0"></stop>
    <stop stop-color="#b76100" offset="1"></stop>
  </linearGradient><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="0s" values="M0 0L 0 255.97996486832747Q 170.75 248.47712123280405  341.5 217.49060019428083T 683 182.50516836218088T 1024.5 167.19163458238694T 1366 153.60915558695396L 1366 0 Z;M0 0L 0 259.22930801331364Q 170.75 289.29625324654194  341.5 256.2342485849177T 683 209.36147117284543T 1024.5 149.69875492022194T 1366 124.48126696272013L 1366 0 Z;M0 0L 0 287.23219247558586Q 170.75 252.47039637558387  341.5 225.40337601193693T 683 200.55912328586598T 1024.5 178.8666244807941T 1366 156.20156636615548L 1366 0 Z;M0 0L 0 255.97996486832747Q 170.75 248.47712123280405  341.5 217.49060019428083T 683 182.50516836218088T 1024.5 167.19163458238694T 1366 153.60915558695396L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-0.8333333333333334s" values="M0 0L 0 281.0793329340123Q 170.75 297.53807088937634  341.5 251.70978809481994T 683 228.43837704631676T 1024.5 147.89651278166554T 1366 128.5127227176955L 1366 0 Z;M0 0L 0 283.91778199710063Q 170.75 263.2161121756891  341.5 247.81423923830408T 683 227.39063267439863T 1024.5 191.44834264601917T 1366 163.94513427158068L 1366 0 Z;M0 0L 0 298.80558108310066Q 170.75 259.9966039847934  341.5 233.31781354655928T 683 210.24313931596913T 1024.5 168.19110040917556T 1366 121.35192876322844L 1366 0 Z;M0 0L 0 281.0793329340123Q 170.75 297.53807088937634  341.5 251.70978809481994T 683 228.43837704631676T 1024.5 147.89651278166554T 1366 128.5127227176955L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-1.6666666666666667s" values="M0 0L 0 299.893541127143Q 170.75 252.20703795440662  341.5 230.61898168821892T 683 185.7325258474721T 1024.5 165.46077824932894T 1366 90.73076198952154L 1366 0 Z;M0 0L 0 296.8214691459025Q 170.75 269.0457394179185  341.5 220.84902710345344T 683 184.1618582497373T 1024.5 133.64113114845793T 1366 106.01814569134822L 1366 0 Z;M0 0L 0 273.5335158400272Q 170.75 251.5098297925437  341.5 220.79048672605262T 683 229.71513806387912T 1024.5 157.34771380839038T 1366 121.24440544521624L 1366 0 Z;M0 0L 0 299.893541127143Q 170.75 252.20703795440662  341.5 230.61898168821892T 683 185.7325258474721T 1024.5 165.46077824932894T 1366 90.73076198952154L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-2.5s" values="M0 0L 0 277.8245972017347Q 170.75 243.49348125562662  341.5 213.84255964315486T 683 176.75640612566005T 1024.5 169.75444751592974T 1366 129.22264653905597L 1366 0 Z;M0 0L 0 263.9902546046017Q 170.75 264.8574280442041  341.5 231.64954743276178T 683 194.07862049697988T 1024.5 186.74166848918622T 1366 146.6592707674438L 1366 0 Z;M0 0L 0 280.06212587903605Q 170.75 260.9404139811624  341.5 242.7822357243368T 683 191.0972358149673T 1024.5 189.37951739091935T 1366 149.32616537423866L 1366 0 Z;M0 0L 0 277.8245972017347Q 170.75 243.49348125562662  341.5 213.84255964315486T 683 176.75640612566005T 1024.5 169.75444751592974T 1366 129.22264653905597L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-3.3333333333333335s" values="M0 0L 0 260.2516643663687Q 170.75 271.88327482063744  341.5 249.11112879986672T 683 180.62563446870337T 1024.5 150.2935321482315T 1366 125.61602781344672L 1366 0 Z;M0 0L 0 269.183847445206Q 170.75 244.90263466602804  341.5 221.66380852187308T 683 229.06490843901247T 1024.5 184.46997676134822T 1366 118.57552344953513L 1366 0 Z;M0 0L 0 300.22955752886975Q 170.75 257.8953581055735  341.5 222.0705483550293T 683 179.5461902183759T 1024.5 138.55715788278195T 1366 102.59690895465477L 1366 0 Z;M0 0L 0 260.2516643663687Q 170.75 271.88327482063744  341.5 249.11112879986672T 683 180.62563446870337T 1024.5 150.2935321482315T 1366 125.61602781344672L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-4.166666666666667s" values="M0 0L 0 291.61258799332103Q 170.75 262.66962291532116  341.5 230.0921655669355T 683 190.4690215036507T 1024.5 147.52176931537264T 1366 127.74417733290633L 1366 0 Z;M0 0L 0 277.1535980701735Q 170.75 254.90469164694468  341.5 216.62068383273726T 683 182.18947045347136T 1024.5 174.5208076184154T 1366 139.1268761891007L 1366 0 Z;M0 0L 0 282.70705951297424Q 170.75 263.42011986146815  341.5 231.0195477804918T 683 204.50398843538954T 1024.5 187.58189428697136T 1366 140.96104776024856L 1366 0 Z;M0 0L 0 291.61258799332103Q 170.75 262.66962291532116  341.5 230.0921655669355T 683 190.4690215036507T 1024.5 147.52176931537264T 1366 127.74417733290633L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-5s" values="M0 0L 0 252.91262592964318Q 170.75 264.73032386038705  341.5 240.4730356823595T 683 235.57343427728324T 1024.5 155.9386218426496T 1366 160.69629220558048L 1366 0 Z;M0 0L 0 252.21862222912324Q 170.75 277.3398141108294  341.5 245.70311715226654T 683 221.0407715021663T 1024.5 146.46725866668132T 1366 122.37179517134643L 1366 0 Z;M0 0L 0 296.9150628787275Q 170.75 267.30557000518957  341.5 236.3842348819158T 683 225.69618246710536T 1024.5 199.01018545321094T 1366 145.34226455217922L 1366 0 Z;M0 0L 0 252.91262592964318Q 170.75 264.73032386038705  341.5 240.4730356823595T 683 235.57343427728324T 1024.5 155.9386218426496T 1366 160.69629220558048L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-5.833333333333334s" values="M0 0L 0 279.2276635880816Q 170.75 260.4157178288588  341.5 227.36435924166352T 683 181.93401603922774T 1024.5 158.30054453333676T 1366 115.44657289106448L 1366 0 Z;M0 0L 0 263.89661587582975Q 170.75 250.4722448764655  341.5 224.24620215704925T 683 167.35850015018028T 1024.5 164.1080921558837T 1366 112.31962551474282L 1366 0 Z;M0 0L 0 295.68771565508473Q 170.75 283.9483237149902  341.5 257.7714247036929T 683 223.67004277787544T 1024.5 190.4168486516647T 1366 137.40332321539236L 1366 0 Z;M0 0L 0 279.2276635880816Q 170.75 260.4157178288588  341.5 227.36435924166352T 683 181.93401603922774T 1024.5 158.30054453333676T 1366 115.44657289106448L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-6.666666666666667s" values="M0 0L 0 271.1500723853523Q 170.75 232.98536526608052  341.5 214.21869147897826T 683 216.10016644356898T 1024.5 183.25200813309203T 1366 108.8890927163136L 1366 0 Z;M0 0L 0 290.2944779142071Q 170.75 272.8722531500608  341.5 253.59827860950082T 683 172.75043350159956T 1024.5 165.39215966127165T 1366 106.49786419207908L 1366 0 Z;M0 0L 0 273.9476062086093Q 170.75 278.23575538787065  341.5 254.4928549458932T 683 200.83170471945493T 1024.5 184.1538030768135T 1366 156.27520741538044L 1366 0 Z;M0 0L 0 271.1500723853523Q 170.75 232.98536526608052  341.5 214.21869147897826T 683 216.10016644356898T 1024.5 183.25200813309203T 1366 108.8890927163136L 1366 0 Z"></animate>
  </path><path d="" fill="url(#lg-0.1935001013680243)" opacity="0.4">
    <animate attributeName="d" dur="8.333333333333334s" repeatCount="indefinite" keyTimes="0;0.333;0.667;1" calcmod="spline" keySplines="0.2 0 0.2 1;0.2 0 0.2 1;0.2 0 0.2 1" begin="-7.5s" values="M0 0L 0 296.94457354352744Q 170.75 264.61038417590794  341.5 242.56168399677586T 683 202.58932851448088T 1024.5 197.48636591911T 1366 143.2682747334944L 1366 0 Z;M0 0L 0 275.3342269024691Q 170.75 258.90659418070265  341.5 240.39015085097174T 683 207.5963682338533T 1024.5 183.51003773967273T 1366 103.14789453705782L 1366 0 Z;M0 0L 0 288.3622520332217Q 170.75 273.4064546735342  341.5 233.86192703140574T 683 179.20663742630742T 1024.5 175.13971382187276T 1366 109.44234373079243L 1366 0 Z;M0 0L 0 296.94457354352744Q 170.75 264.61038417590794  341.5 242.56168399677586T 683 202.58932851448088T 1024.5 197.48636591911T 1366 143.2682747334944L 1366 0 Z"></animate>
  </path></g>
</svg>
    </div>
    
    @include('partials.article')

    @include('partials.facility')

    {{-- @include('partials.alumnus') --}}

    @include('partials.work')
@endsection