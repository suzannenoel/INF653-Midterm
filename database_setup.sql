-- ============================================================
-- Quotes Database Setup
-- Run SQL and create tables insert data
-- ============================================================

-- Create tables
CREATE TABLE IF NOT EXISTS authors (
    id SERIAL PRIMARY KEY,
    author VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS categories (
    id SERIAL PRIMARY KEY,
    category VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS quotes (
    id SERIAL PRIMARY KEY,
    quote TEXT NOT NULL,
    author_id INT NOT NULL REFERENCES authors(id),
    category_id INT NOT NULL REFERENCES categories(id)
);

-- ============================================================
-- 5 Categores minimum
-- ============================================================
INSERT INTO categories (category) VALUES
    ('Life'),
    ('Motivation'),
    ('Success'),
    ('Wisdom'),
    ('Happiness');

-- ============================================================
-- 5 Authors required 
-- ============================================================
INSERT INTO authors (author) VALUES
    ('Albert Einstein'),
    ('Winston Churchill'),
    ('Mahatma Gandhi'),
    ('Abraham Lincoln'),
    ('Oprah Winfrey');

-- ============================================================
-- 25 Quotes required
-- ============================================================
INSERT INTO quotes (quote, author_id, category_id) VALUES
    -- Albert Einstein (id=1)
    ('Life is like riding a bicycle. To keep your balance, you must keep moving.', 1, 1),
    ('Imagination is more important than knowledge.', 1, 3),
    ('The only source of knowledge is experience.', 1, 5),
    ('In the middle of difficulty lies opportunity.', 1, 2),
    ('A person who never made a mistake never tried anything new.', 1, 4),

    -- Winston Churchill (id=2)
    ('Success is not final, failure is not fatal: it is the courage to continue that counts.', 2, 3),
    ('If you are going through hell, keep going.', 2, 2),
    ('We make a living by what we get, but we make a life by what we give.', 2, 1),
    ('Attitude is a little thing that makes a big difference.', 2, 4),
    ('The pessimist sees difficulty in every opportunity. The optimist sees opportunity in every difficulty.', 2, 5),

    -- Mahatma Gandhi (id=3)
    ('Be the change you wish to see in the world.', 3, 2),
    ('Live as if you were to die tomorrow. Learn as if you were to live forever.', 3, 4),
    ('Strength does not come from physical capacity. It comes from an indomitable will.', 3, 2),
    ('Happiness is when you think, what you say, and what you do are in harmony.', 3, 5),
    ('The best way to find yourself is to lose yourself in the service of others.', 3, 1),

    -- Abraham Lincoln (id=4)
    ('Give me six hours to chop down a tree and I will spend the first four sharpening the axe.', 4, 2),
    ('Whatever you are, be a good one.', 4, 4),
    ('In the end, it''s not the years in your life that count... It''s the life in your years.', 4, 1),
    ('The best way to predict your future is to create it.', 4, 3),
    ('Most folks are as happy as they make up their minds to be.', 4, 5),

    -- Oprah Winfrey (id=5)
    ('The biggest adventure you can take is to live the life of your dreams.', 5, 1),
    ('Turn your wounds into wisdom.', 5, 4),
    ('You get in life what you have the courage to ask for.', 5, 2),
    ('The more you praise and celebrate your life, the more there is in life to celebrate.', 5, 5),
    ('Do the one thing you think you cannot do. Fail at it. Try again. Do better the second time.', 5, 3); 
