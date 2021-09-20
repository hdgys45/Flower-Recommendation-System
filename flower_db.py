import csv
import requests
from bs4 import BeautifulSoup

url="https://www.nihhs.go.kr/usr/persnal/Flower_library.do?pageIndex="

filename = "flower_db.csv"
f= open(filename, "w", encoding="utf-8-sig", newline="")
writer=csv.writer(f)

title ="월일	꽃이름	꽃말".split("\t")

writer.writerow(title)

for page in range(1, 38):
    res=requests.get(url + str(page))
    res.raise_for_status()
    soup = BeautifulSoup(res.text, "lxml")

    data_rows = soup.find("table", attrs={"class":"board_table"}).find("tbody").find_all("tr")
    for row in data_rows:
        columns = row.find_all("td")
        if len(columns) <=1: # 의미없는 데이터는 skip
            continue
        data = [column.get_text().strip() for column in columns]
        #print(data)
        writer.writerow(data)
