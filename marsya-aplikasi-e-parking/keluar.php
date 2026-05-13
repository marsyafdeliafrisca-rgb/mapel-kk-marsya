from datetime import datetime

# tarif parkir per jam
TARIF_PER_JAM = 5000

def hitung_biaya(jam_masuk, jam_keluar):
    selisih = jam_keluar - jam_masuk
    total_jam = selisih.total_seconds() / 3600
    
    # pembulatan ke atas (misal 1.2 jam = 2 jam)
    total_jam = int(total_jam) + (1 if total_jam % 1 > 0 else 0)
    
    biaya = total_jam * TARIF_PER_JAM
    return total_jam, biaya

def keluar_parkir():
    print("=== KELUAR PARKIR ===")
    
    nomor_polisi = input("Masukkan nomor polisi: ")
    waktu_masuk_str = input("Masukkan waktu masuk (YYYY-MM-DD HH:MM:SS): ")
    
    # waktu keluar = sekarang
    waktu_keluar = datetime.now()
    
    # ubah string ke datetime
    waktu_masuk = datetime.strptime(waktu_masuk_str, "%Y-%m-%d %H:%M:%S")
    
    lama, biaya = hitung_biaya(waktu_masuk, waktu_keluar)
    
    print("\n=== STRUK PARKIR ===")
    print(f"Nomor Polisi : {nomor_polisi}")
    print(f"Waktu Masuk  : {waktu_masuk}")
    print(f"Waktu Keluar : {waktu_keluar}")
    print(f"Lama Parkir  : {lama} jam")
    print(f"Total Biaya  : Rp {biaya}")

# jalankan program
keluar_parkir()