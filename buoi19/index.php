1. SELECT TieuDe, Hinh, TomTat, NoiDung, SoLuotXem From tintuc ORDER BY SoLuotXem DESC


2. SELECT id,TieuDe, Hinh, TomTat, NoiDung, SoLuotXem From tintuc WHERE TieuDe LIKE 'S%'

3. SELECT * From tintuc WHERE TieuDe LIKE '%học sinh%'

4. SELECT tintuc.*,loaitin.Ten FROM tintuc,loaitin WHERE loaitin.id = tintuc.idLoaiTin And loaitin.Ten = "Du Học"

5. SELECT tintuc.* FROM tintuc,theloai,loaitin WHERE tintuc.idLoaiTin = loaitin.id and loaitin.idTheLoai = theloai.id and theloai.Ten="Khoa Học"