from curses import ALL_MOUSE_EVENTS


class Payment:
    id = int
    amount = float

    def __init__(self, id, amount):
        self.id = id
        self.amount = amount

    