import sqlite3

db = sqlite3.connect('P:/Projects/Web/AuthorizationSystem/userauth.sqlite')
c = db.cursor()

# Создание новой таблицы
def create_table():
    c.execute("""CREATE TABLE user (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT,
        password TEXT
        )""")
    db.commit()
    db.close()
# create_table()

# Вывод всей таблицы
def print_table():
    c.execute("""SELECT * FROM user""")
    db.commit()
    print(c.fetchall())
# print_table()

request = None
def req():
    if request != '0':
        c.execute(f'{request}')
        db.commit()
        print(c.fetchall())


# try:
#     while request != '0':        # Остановка программы при вводе 0
#         request = input('>>> ')
#         req()
#     db.close()

# except Exception as e:
#     db.close()
#     print(f"!!! ERROR: {e}")
print_table()