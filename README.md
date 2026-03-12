# INF653 Midterm Project - Quotes REST API

**Author:** [Your Name Here]

**Live Project:** [Add your deployed project URL here]

---

## About

A PHP OOP REST API for managing quotations. Supports full CRUD operations for quotes, authors, and categories.

## Database Setup

Run the SQL in `database_setup.sql` to create and seed the database.

## API Endpoints

Base URL: `https://your-project.repl.co/api`

### Quotes

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/quotes/` | Get all quotes |
| GET | `/quotes/?id=1` | Get quote by ID |
| GET | `/quotes/?author_id=1` | Get quotes by author |
| GET | `/quotes/?category_id=1` | Get quotes by category |
| GET | `/quotes/?author_id=1&category_id=1` | Filter by author and category |
| GET | `/quotes/?random=true` | Get a random quote |
| POST | `/quotes/` | Create a new quote |
| PUT | `/quotes/` | Update a quote |
| DELETE | `/quotes/` | Delete a quote |

### Authors

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/authors/` | Get all authors |
| GET | `/authors/?id=1` | Get author by ID |
| POST | `/authors/` | Create a new author |
| PUT | `/authors/` | Update an author |
| DELETE | `/authors/` | Delete an author |

### Categories

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/categories/` | Get all categories |
| GET | `/categories/?id=1` | Get category by ID |
| POST | `/categories/` | Create a new category |
| PUT | `/categories/` | Update a category |
| DELETE | `/categories/` | Delete a category |
