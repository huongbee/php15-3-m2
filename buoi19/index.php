1. SELECT TieuDe, Hinh, TomTat, NoiDung, SoLuotXem From tintuc ORDER BY SoLuotXem DESC


2. SELECT id,TieuDe, Hinh, TomTat, NoiDung, SoLuotXem From tintuc WHERE TieuDe LIKE 'S%'

3. SELECT * From tintuc WHERE TieuDe LIKE '%học sinh%'

4. SELECT tintuc.*,loaitin.Ten FROM tintuc,loaitin WHERE loaitin.id = tintuc.idLoaiTin And loaitin.Ten = "Du Học"

5. SELECT tintuc.* FROM tintuc,theloai,loaitin WHERE tintuc.idLoaiTin = loaitin.id and loaitin.idTheLoai = theloai.id and theloai.Ten="Khoa Học"


Truy vấn UPDATE
1.
	UPDATE tintuc SET SoLuotXem=(SoLuotXem+1) WHERE TieuDe like "%Trịnh Kim Chi làm quý bà ăn chơi%"

2.
	UPDATE loaitin SET Ten = "Doanh Nghiệp Việt" WHERE Ten LIKE "%Doanh Nghiệp Viết%"



Truy vấn xóa
1. DELETE FROM comment WHERE idTinTuc = 12
3. DELETE FROM theloai WHERE id NOT IN (SELECT DISTINCT idTheLoai FROM loaitin )
4. DELETE FROM loaitin WHERE idTheLoai = (SELECT id FROM theloai t WHERE t.Ten LIKE "%Vi tính%")