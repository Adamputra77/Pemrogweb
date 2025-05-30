<!DOCTYPE html>
<html>
<head>
    <title>Midtrans Payment</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>
    <h2>Simulasi Pembayaran Midtrans</h2>
    <button id="pay-button">Bayar Sekarang</button>

    <script type="text/javascript">
        document.getElementById('pay-button').addEventListener('click', function () {
            snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    alert("Pembayaran Berhasil!");
                    console.log(result);
                },
                onPending: function(result) {
                    alert("Pembayaran Pending!");
                    console.log(result);
                },
                onError: function(result) {
                    alert("Pembayaran Gagal!");
                    console.log(result);
                },
                onClose: function() {
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        });
    </script>
</body>
</html>
