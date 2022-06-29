<style>
        .nav-tabs{
            margin: 0 auto !important;
        }
        .nav-item a{
            color: black;
        }
        .apply-wrapper p{
            text-align: center;
            font-size: 24px;
            margin-bottom: 6%;
            font-weight: bold;
        }
    </style>

    <div class="tabs">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                    <a class="nav-link active" href="/apply/peminjaman">Peminjaman</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('penarikan') }}">Penarikan</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/apply/simpanan">Simpanan</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/apply/angsuran">Angsuran</a>
            </li>
        </ul>
    </div>