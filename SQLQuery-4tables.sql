/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP 1000 [OrderID]
      ,[MaNV]
      ,[MaLichSuPhieu]
      ,[ThoiGian]
      ,[TrangThai]
      ,[TenNV]
      ,[OrderKey]
  FROM [GOLDENLOTUS_Q3].[dbo].[tblOrder] WHERE OrderID like '%-19%'
  
 