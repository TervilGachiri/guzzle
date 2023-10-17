<?php

namespace Models\Map;

use Models\Contact;
use Models\ContactQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'contact' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ContactTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'Models.Map.ContactTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'contact';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'Contact';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Models\\Contact';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'Models.Contact';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id field
     */
    public const COL_ID = 'contact.id';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'contact.name';

    /**
     * the column name for the email field
     */
    public const COL_EMAIL = 'contact.email';

    /**
     * the column name for the country field
     */
    public const COL_COUNTRY = 'contact.country';

    /**
     * the column name for the contact_date field
     */
    public const COL_CONTACT_DATE = 'contact.contact_date';

    /**
     * the column name for the message field
     */
    public const COL_MESSAGE = 'contact.message';

    /**
     * the column name for the phone field
     */
    public const COL_PHONE = 'contact.phone';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Id', 'Name', 'Email', 'Country', 'ContactDate', 'Message', 'Phone', ],
        self::TYPE_CAMELNAME     => ['id', 'name', 'email', 'country', 'contactDate', 'message', 'phone', ],
        self::TYPE_COLNAME       => [ContactTableMap::COL_ID, ContactTableMap::COL_NAME, ContactTableMap::COL_EMAIL, ContactTableMap::COL_COUNTRY, ContactTableMap::COL_CONTACT_DATE, ContactTableMap::COL_MESSAGE, ContactTableMap::COL_PHONE, ],
        self::TYPE_FIELDNAME     => ['id', 'name', 'email', 'country', 'contact_date', 'message', 'phone', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Id' => 0, 'Name' => 1, 'Email' => 2, 'Country' => 3, 'ContactDate' => 4, 'Message' => 5, 'Phone' => 6, ],
        self::TYPE_CAMELNAME     => ['id' => 0, 'name' => 1, 'email' => 2, 'country' => 3, 'contactDate' => 4, 'message' => 5, 'phone' => 6, ],
        self::TYPE_COLNAME       => [ContactTableMap::COL_ID => 0, ContactTableMap::COL_NAME => 1, ContactTableMap::COL_EMAIL => 2, ContactTableMap::COL_COUNTRY => 3, ContactTableMap::COL_CONTACT_DATE => 4, ContactTableMap::COL_MESSAGE => 5, ContactTableMap::COL_PHONE => 6, ],
        self::TYPE_FIELDNAME     => ['id' => 0, 'name' => 1, 'email' => 2, 'country' => 3, 'contact_date' => 4, 'message' => 5, 'phone' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Id' => 'ID',
        'Contact.Id' => 'ID',
        'id' => 'ID',
        'contact.id' => 'ID',
        'ContactTableMap::COL_ID' => 'ID',
        'COL_ID' => 'ID',
        'Name' => 'NAME',
        'Contact.Name' => 'NAME',
        'name' => 'NAME',
        'contact.name' => 'NAME',
        'ContactTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'Email' => 'EMAIL',
        'Contact.Email' => 'EMAIL',
        'email' => 'EMAIL',
        'contact.email' => 'EMAIL',
        'ContactTableMap::COL_EMAIL' => 'EMAIL',
        'COL_EMAIL' => 'EMAIL',
        'Country' => 'COUNTRY',
        'Contact.Country' => 'COUNTRY',
        'country' => 'COUNTRY',
        'contact.country' => 'COUNTRY',
        'ContactTableMap::COL_COUNTRY' => 'COUNTRY',
        'COL_COUNTRY' => 'COUNTRY',
        'ContactDate' => 'CONTACT_DATE',
        'Contact.ContactDate' => 'CONTACT_DATE',
        'contactDate' => 'CONTACT_DATE',
        'contact.contactDate' => 'CONTACT_DATE',
        'ContactTableMap::COL_CONTACT_DATE' => 'CONTACT_DATE',
        'COL_CONTACT_DATE' => 'CONTACT_DATE',
        'contact_date' => 'CONTACT_DATE',
        'contact.contact_date' => 'CONTACT_DATE',
        'Message' => 'MESSAGE',
        'Contact.Message' => 'MESSAGE',
        'message' => 'MESSAGE',
        'contact.message' => 'MESSAGE',
        'ContactTableMap::COL_MESSAGE' => 'MESSAGE',
        'COL_MESSAGE' => 'MESSAGE',
        'Phone' => 'PHONE',
        'Contact.Phone' => 'PHONE',
        'phone' => 'PHONE',
        'contact.phone' => 'PHONE',
        'ContactTableMap::COL_PHONE' => 'PHONE',
        'COL_PHONE' => 'PHONE',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('contact');
        $this->setPhpName('Contact');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Models\\Contact');
        $this->setPackage('Models');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 200, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 200, null);
        $this->addColumn('country', 'Country', 'VARCHAR', false, 100, null);
        $this->addColumn('contact_date', 'ContactDate', 'DATETIME', false, null, null);
        $this->addColumn('message', 'Message', 'LONGVARCHAR', false, null, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 20, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? ContactTableMap::CLASS_DEFAULT : ContactTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (Contact object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = ContactTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ContactTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ContactTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ContactTableMap::OM_CLASS;
            /** @var Contact $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ContactTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = ContactTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ContactTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Contact $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ContactTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ContactTableMap::COL_ID);
            $criteria->addSelectColumn(ContactTableMap::COL_NAME);
            $criteria->addSelectColumn(ContactTableMap::COL_EMAIL);
            $criteria->addSelectColumn(ContactTableMap::COL_COUNTRY);
            $criteria->addSelectColumn(ContactTableMap::COL_CONTACT_DATE);
            $criteria->addSelectColumn(ContactTableMap::COL_MESSAGE);
            $criteria->addSelectColumn(ContactTableMap::COL_PHONE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.country');
            $criteria->addSelectColumn($alias . '.contact_date');
            $criteria->addSelectColumn($alias . '.message');
            $criteria->addSelectColumn($alias . '.phone');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(ContactTableMap::COL_ID);
            $criteria->removeSelectColumn(ContactTableMap::COL_NAME);
            $criteria->removeSelectColumn(ContactTableMap::COL_EMAIL);
            $criteria->removeSelectColumn(ContactTableMap::COL_COUNTRY);
            $criteria->removeSelectColumn(ContactTableMap::COL_CONTACT_DATE);
            $criteria->removeSelectColumn(ContactTableMap::COL_MESSAGE);
            $criteria->removeSelectColumn(ContactTableMap::COL_PHONE);
        } else {
            $criteria->removeSelectColumn($alias . '.id');
            $criteria->removeSelectColumn($alias . '.name');
            $criteria->removeSelectColumn($alias . '.email');
            $criteria->removeSelectColumn($alias . '.country');
            $criteria->removeSelectColumn($alias . '.contact_date');
            $criteria->removeSelectColumn($alias . '.message');
            $criteria->removeSelectColumn($alias . '.phone');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(ContactTableMap::DATABASE_NAME)->getTable(ContactTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a Contact or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or Contact object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ContactTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Models\Contact) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ContactTableMap::DATABASE_NAME);
            $criteria->add(ContactTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ContactQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ContactTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ContactTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the contact table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return ContactQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Contact or Criteria object.
     *
     * @param mixed $criteria Criteria or Contact object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ContactTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Contact object
        }

        if ($criteria->containsKey(ContactTableMap::COL_ID) && $criteria->keyContainsValue(ContactTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ContactTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = ContactQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
