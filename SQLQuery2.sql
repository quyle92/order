/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP 1000 [OrderID]
      ,[MaHangBan]
      ,[MaDVT]
      ,[SoLuong]
      ,[DonGia]
      ,[YeuCauThem]
      ,[ThoiGian]
      ,[MaSuCo]
      ,[TenHangBan]
      ,[LyDo]
      ,[MaNVLienQuan]
      ,[GhiChuKMHB]
  FROM [GOLDENLOTUS_Q3].[dbo].[tblOrderChiTiet] where OrderID like '%-19%'
  
 