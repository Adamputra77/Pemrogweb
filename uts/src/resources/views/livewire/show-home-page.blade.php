<main class="main">
    <!-- Bagian Hero -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 content-col" data-aos="fade-up">
            <div class="content">
              <div class="agency-name">
                <h5></h5>
              </div>
  
              <div class="main-heading">
                <h1>Jual <br />TokoSepatuKu</h1>
              </div>
  
              <div class="divider"></div>
  
              <div class="description">
                <p>
                  Temukan berbagai koleksi sepatu terbaru dan berkualitas untuk segala kebutuhan Anda. 
                  Dari sepatu kasual hingga formal, kami menghadirkan kenyamanan dan gaya dalam setiap langkah Anda.
                </p>
              </div>
  
              <div class="cta-button">
                <a href="#services" class="btn">
                  <span>Produkita</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="col-lg-5" data-aos="zoom-out">
            <div class="visual-content">
              <div class="fluid-shape">
                <img
                  src="{{ asset('front/assets/img/abstract/WebNike.png') }}"
                  alt="Gambar Abstrak"
                  class="fluid-img"
                />
              </div>
  
              <div class="stats-card">
                <div class="stats-number">
                  <h2>5RB+</h2>
                </div>
                <div class="stats-label">
                  <p>Pelanggan Puas</p>
                </div>
                <div class="stats-arrow">
                  <a href="#portfolio"><i class="bi bi-arrow-up-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Bagian Hero --><main class="main">
    <!-- /Bagian Hero -->
  
    <!-- Bagian Tentang -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang</h2>
        <div>
          <span>Kenali Lebih Dekat</span>
          <span class="description-title">TokoSepatuKu</span>
        </div>
      </div>
  
      <div class="container">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image position-relative">
              <img
                src="{{ asset('front/assets/img/about/about-portrait-1.webp') }}"
                class="img-fluid rounded-4 shadow-sm"
                alt="Tentang Kami"
                loading="lazy"
              />
              <div class="experience-badge">
                <span class="years">20+</span>
                <span class="text">Tahun Pengalaman</span>
              </div>
            </div>
          </div>
  
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Menjadi Pilihan Utama untuk Sepatu Berkualitas</h2>
              <p class="lead">
                Kami berkomitmen menyediakan produk sepatu dengan kualitas terbaik, kenyamanan maksimal, dan desain terkini.
              </p>
              <p>
                Dengan berbagai pilihan model dan ukuran, TokoSepatuKu siap memenuhi kebutuhan fashion kaki Anda, baik untuk kegiatan sehari-hari, olahraga, hingga acara formal.
              </p>
  
              <div class="row g-4 mt-3">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                  <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h5>Layanan Pelanggan Terbaik</h5>
                    <p>
                      Tim kami siap membantu Anda memilih produk terbaik dan memberikan pengalaman belanja online yang mudah dan aman.
                    </p>
                  </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                  <div class="feature-item">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h5>Desain Kekinian</h5>
                    <p>
                      Koleksi sepatu kami selalu mengikuti tren terbaru, cocok untuk Anda yang ingin tampil stylish dan percaya diri.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Bagian Tentang -->

    <!-- Bagian Produk -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Produk Kami</h2>
        <p>Temukan koleksi sepatu terbaik kami</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <!-- Produk 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/VANS.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Sneakers"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sneakers Casual</h4>
                <p class="price">Rp 499.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary buy-now">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/sepatu2.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Olahraga"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Running</h4>
                <p class="price">Rp 599.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary buy-now">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/SepatuFormal.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Formal"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Formal</h4>
                <p class="price">Rp 699.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary buy-now">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/Sepatuanak.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Anak"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Anak</h4>
                <p class="price">Rp 299.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary buy-now">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 5 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/SepatuBasket.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Basket"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Basket</h4>
                <p class="price">Rp 2.799.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary buy-now">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 6 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/SepatuNike.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Sandal"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Nike</h4>
                <p class="price">Rp 1.999.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary buy-now">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
          <a href="#" class="btn btn-primary">Lihat Semua Produk</a>
        </div>
      </div>
    </section>
    <!-- /Bagian Produk -->

    <!-- Modal untuk Pilih Ukuran dan Checkout -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Checkout Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="product-info-checkout mb-4">
              <img id="modalProductImage" src="" class="img-thumbnail" width="80">
              <div>
                <h6 id="modalProductName"></h6>
                <p class="mb-0">Harga: <span id="modalProductPrice"></span></p>
              </div>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Pilih Ukuran</label>
              <div class="size-selector d-flex flex-wrap gap-2">
                <input type="radio" class="btn-check" name="size" id="size36" value="36" autocomplete="off">
                <label class="btn btn-outline-primary" for="size36">36</label>
                
                <input type="radio" class="btn-check" name="size" id="size37" value="37" autocomplete="off">
                <label class="btn btn-outline-primary" for="size37">37</label>
                
                <input type="radio" class="btn-check" name="size" id="size38" value="38" autocomplete="off">
                <label class="btn btn-outline-primary" for="size38">38</label>
                
                <input type="radio" class="btn-check" name="size" id="size39" value="39" autocomplete="off">
                <label class="btn btn-outline-primary" for="size39">39</label>
                
                <input type="radio" class="btn-check" name="size" id="size40" value="40" autocomplete="off">
                <label class="btn btn-outline-primary" for="size40">40</label>
                
                <input type="radio" class="btn-check" name="size" id="size41" value="41" autocomplete="off">
                <label class="btn btn-outline-primary" for="size41">41</label>
                
                <input type="radio" class="btn-check" name="size" id="size42" value="42" autocomplete="off">
                <label class="btn btn-outline-primary" for="size42">42</label>
              </div>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Metode Pembayaran</label>
              <select class="form-select">
                <option selected>Pilih metode pembayaran</option>
                <option value="gopay">Gopay</option>
                <option value="ovo">OVO</option>
                <option value="dana">DANA</option>
                <option value="bank">Transfer Bank</option>
                <option value="cod">COD (Bayar di Tempat)</option>
              </select>
            </div>
            
            <div class="mb-3">
              <label class="form-label">Alamat Pengiriman</label>
              <textarea class="form-control" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary" id="processPayment">Proses Pembayaran</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Tangkap semua tombol Beli Sekarang
    const buyButtons = document.querySelectorAll('.buy-now');
    
    buyButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Dapatkan info produk dari card
        const productCard = this.closest('.product-card');
        const productName = productCard.querySelector('h4').textContent;
        const productPrice = productCard.querySelector('.price').textContent;
        const productImage = productCard.querySelector('img').src;
        
        // Isi data ke modal
        document.getElementById('modalProductName').textContent = productName;
        document.getElementById('modalProductPrice').textContent = productPrice;
        document.getElementById('modalProductImage').src = productImage;
        
        // Tampilkan modal
        const checkoutModal = new bootstrap.Modal(document.getElementById('checkoutModal'));
        checkoutModal.show();
      });
    });
    
    // Untuk tombol Proses Pembayaran
    document.getElementById('processPayment').addEventListener('click', function() {
      const selectedSize = document.querySelector('input[name="size"]:checked');
      
      if (!selectedSize) {
        alert('Silakan pilih ukuran sepatu terlebih dahulu');
        return;
      }
      
      alert('Pembayaran berhasil diproses! Kami akan mengirimkan detail pembayaran ke kontak Anda.');
      const checkoutModal = bootstrap.Modal.getInstance(document.getElementById('checkoutModal'));
      checkoutModal.hide();
    });
  });
  </script>

  <style>
  /* Style untuk modal checkout */
  .product-info-checkout {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 10px;
    background: #f8f9fa;
    border-radius: 8px;
  }

  .size-selector .btn {
    width: 50px;
    text-align: center;
  }

  .modal-content {
    border-radius: 12px;
  }

  .modal-header {
    border-bottom: none;
    padding-bottom: 0;
  }

  .modal-footer {
    border-top: none;
  }

  /* Style untuk product cards */
  .product-card {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 30px;
    background: #fff;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  }

  .product-img {
    position: relative;
    overflow: hidden;
    height: 250px;
  }

  .product-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .product-card:hover .product-img img {
    transform: scale(1.05);
  }

  .product-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .product-card:hover .product-overlay {
    opacity: 1;
  }

  .product-info {
    padding: 20px;
  }

  .product-info h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
  }

  .price {
    font-weight: bold;
    color: #0d6efd;
    font-size: 1.1rem;
    margin-bottom: 15px;
  }

  .product-actions {
    display: flex;
    gap: 10px;
  }

  .product-actions .btn {
    flex: 1;
    padding: 8px 12px;
    font-size: 0.9rem;
  }
  </style>
  
    <!-- Bagian Tentang -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang</h2>
        <div>
          <span>Kenali Lebih Dekat</span>
          <span class="description-title">TokoSepatuKu</span>
        </div>
      </div>
  
      <div class="container">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image position-relative">
              <img
                src="{{ asset('front/assets/img/about/about-portrait-1.webp') }}"
                class="img-fluid rounded-4 shadow-sm"
                alt="Tentang Kami"
                loading="lazy"
              />
              <div class="experience-badge">
                <span class="years">20+</span>
                <span class="text">Tahun Pengalaman</span>
              </div>
            </div>
          </div>
  
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Menjadi Pilihan Utama untuk Sepatu Berkualitas</h2>
              <p class="lead">
                Kami berkomitmen menyediakan produk sepatu dengan kualitas terbaik, kenyamanan maksimal, dan desain terkini.
              </p>
              <p>
                Dengan berbagai pilihan model dan ukuran, TokoSepatuKu siap memenuhi kebutuhan fashion kaki Anda, baik untuk kegiatan sehari-hari, olahraga, hingga acara formal.
              </p>
  
              <div class="row g-4 mt-3">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                  <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h5>Layanan Pelanggan Terbaik</h5>
                    <p>
                      Tim kami siap membantu Anda memilih produk terbaik dan memberikan pengalaman belanja online yang mudah dan aman.
                    </p>
                  </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                  <div class="feature-item">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h5>Desain Kekinian</h5>
                    <p>
                      Koleksi sepatu kami selalu mengikuti tren terbaru, cocok untuk Anda yang ingin tampil stylish dan percaya diri.
                    </p>
                  </div>
                </div>
              </div>
                  <!-- Bagian Produk -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Produk Kami</h2>
        <p>Temukan koleksi sepatu terbaik kami</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <!-- Produk 1 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/VANS.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Sneakers"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sneakers Casual</h4>
                <p class="price">Rp 499.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 2 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/sepatu2.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Olahraga"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Running</h4>
                <p class="price">Rp 599.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 3 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/SepatuFormal.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Formal"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Formal</h4>
                <p class="price">Rp 699.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 4 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/Sepatuanak.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Anak"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Anak</h4>
                <p class="price">Rp 299.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 5 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/SepatuBasket.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Basket"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Basket</h4>
                <p class="price">Rp 2.799.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Produk 6 -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="product-card">
              <div class="product-img">
                <img 
                  src="{{ asset('front/assets/img/products/SepatuNike.png') }}" 
                  class="img-fluid" 
                  alt="Sepatu Sandal"
                  loading="lazy">
                <div class="product-overlay">
                  <a href="#" class="btn btn-outline-light">Lihat Detail</a>
                </div>
              </div>
              <div class="product-info">
                <h4>Sepatu Nike</h4>
                <p class="price">Rp 1.999.000</p>
                <div class="product-actions">
                  <button class="btn btn-sm btn-outline-primary">+ Keranjang</button>
                  <button class="btn btn-sm btn-primary">Beli Sekarang</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
          <a href="#" class="btn btn-primary">Lihat Semua Produk</a>
        </div>
      </div>
    </section>
    <!-- /Bagian Produk -->
  
              <a href="#" class="btn btn-primary mt-4">Jelajahi Produk Kami</a>
            </div>
          </div>
        </div>
  
        <div class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
              <div class="testimonial-intro">
                <h3>Kata Mereka</h3>
                <p>
                  Simak langsung pengalaman para pelanggan kami setelah berbelanja di TokoSepatuKu.
                </p>
                <div class="swiper-nav-buttons mt-4">
                  <button class="slider-prev">
                    <i class="bi bi-arrow-left"></i>
                  </button>
                  <button class="slider-next">
                    <i class="bi bi-arrow-right"></i>
                  </button>
                </div>
              </div>
            </div>
  
            <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
              <div class="testimonial-slider swiper init-swiper">
                <!-- Swiper Config -->
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                      "nextEl": ".slider-next",
                      "prevEl": ".slider-prev"
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <!-- Testimoni 1 -->
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        "Sepatunya nyaman dipakai dan kualitasnya bagus.!"
                      </p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img
                          src="{{ asset('front/assets/img/person/person-f-1.webp') }}"
                          class="client-img"
                          alt="Pelanggan"
                          loading="lazy"
                        />
                        <div>
                          <h6 class="mb-0">Aulia Rahma</h6>
                          <span>Pelanggan Setia</span>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Testimoni 2 -->
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>
                        "Modelnya keren dan up-to-date banget! Harganya juga bersahabat."
                      </p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img
                          src="{{ asset('front/assets/img/person/person-m-1.webp') }}"
                          class="client-img"
                          alt="Pelanggan"
                          loading="lazy"
                        />
                        <div>
                          <h6 class="mb-0">Rian Setiawan</h6>
                          <span>Fashion Enthusiast</span>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <!-- Tambahkan testimoni lain sesuai kebutuhan -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Bagian Tentang -->
  </main>
  