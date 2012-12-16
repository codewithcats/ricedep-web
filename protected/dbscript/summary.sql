SELECT * FROM
	(SELECT 
		InsID, 
		SUM(Uoil) AS sum_uoil_2554,
		SUM(Uwater) AS sum_uwater_2554,
		SUM(Uelec) AS sum_uelec_2554,
		SUM(Poil) AS sum_poil_2554,
		SUM(Pwater) AS sum_pwater_2554,
		SUM(Pelec) AS sum_pelec_2554
	FROM energy.usetb 
	WHERE InsID <> '' AND budget_year = 2554
	GROUP BY InsID, budget_year) sum_2554
RIGHT OUTER JOIN 
	(SELECT 
		InsID, 
		SUM(Uoil) AS sum_uoil_2555,
		SUM(Uwater) AS sum_uwater_2555,
		SUM(Uelec) AS sum_uelec_2555,
		SUM(Poil) AS sum_poil_2555,
		SUM(Pwater) AS sum_pwater_2555,
		SUM(Pelec) AS sum_pelec_2555
	FROM energy.usetb 
	WHERE InsID <> '' AND budget_year = 2555
	GROUP BY InsID, budget_year) sum_2555
ON sum_2554.InsID = sum_2555.InsID;