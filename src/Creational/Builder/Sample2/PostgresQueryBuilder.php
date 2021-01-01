<?php

namespace Pattern\Creational\Builder\Sample2;

/**
 * EN: This Concrete Builder is compatible with PostgreSQL. While Postgres is
 * very similar to Mysql, it still has several differences. To reuse the common
 * code, we extend it from the MySQL builder, while overriding some of the
 * building steps.
 */
class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * EN: Among other things, PostgreSQL has slightly different LIMIT syntax.
     *
     * @param int $start
     * @param int $offset
     *
     * @return SQLQueryBuilder
     * @throws \Exception
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }

    // EN: + tons of other overrides...
}