<?php

declare(strict_types=1);

namespace Mock;

use M6Web\Component\RedisMock\RedisMock;
use Predis\ClientInterface;
use Predis\Command\CommandInterface;

/**
 * @method string dump($key)
 * @method int    expireat($key, $timestamp)
 * @method int    move($key, $db)
 * @method mixed  object($subcommand, $key)
 * @method int    persist($key)
 * @method int    pexpire($key, $milliseconds)
 * @method int    pexpireat($key, $timestamp)
 * @method int    pttl($key)
 * @method string randomkey()
 * @method mixed  rename($key, $target)
 * @method int    renamenx($key, $target)
 * @method array  sort($key, array $options = null)
 * @method int    append($key, $value)
 * @method int    bitcount($key, $start = null, $end = null)
 * @method int    bitop($operation, $destkey, $key)
 * @method array  bitfield($key, $subcommand, ...$subcommandArg)
 * @method int    getbit($key, $offset)
 * @method string getrange($key, $start, $end)
 * @method string getset($key, $value)
 * @method int    msetnx(array $dictionary)
 * @method mixed  psetex($key, $milliseconds, $value)
 * @method int    setbit($key, $offset, $value)
 * @method int    setrange($key, $offset, $value)
 * @method int    strlen($key)
 * @method string hincrbyfloat($key, $field, $increment)
 * @method array  hscan($key, $cursor, array $options = null)
 * @method array  hvals($key)
 * @method int    hstrlen($key, $field)
 * @method array  blpop(array $keys, $timeout)
 * @method array  brpop(array $keys, $timeout)
 * @method array  brpoplpush($source, $destination, $timeout)
 * @method int    linsert($key, $whence, $pivot, $value)
 * @method int    lpushx($key, $value)
 * @method mixed  lset($key, $index, $value)
 * @method int    rpushx($key, $value)
 * @method int    sdiffstore($destination, array $keys)
 * @method int    sinterstore($destination, array $keys)
 * @method int    smove($source, $destination, $member)
 * @method string spop($key, $count = null)
 * @method string srandmember($key, $count = null)
 * @method array  sscan($key, $cursor, array $options = null)
 * @method int    sunionstore($destination, array $keys)
 * @method string zcount($key, $min, $max)
 * @method int    zinterstore($destination, array $keys, array $options = null)
 * @method int    zremrangebyrank($key, $start, $stop)
 * @method int    zunionstore($destination, array $keys, array $options = null)
 * @method array  zscan($key, $cursor, array $options = null)
 * @method array  zrangebylex($key, $start, $stop, array $options = null)
 * @method array  zrevrangebylex($key, $start, $stop, array $options = null)
 * @method int    zremrangebylex($key, $min, $max)
 * @method int    zlexcount($key, $min, $max)
 * @method int    pfadd($key, array $elements)
 * @method mixed  pfmerge($destinationKey, array $sourceKeys)
 * @method int    pfcount(array $keys)
 * @method mixed  pubsub($subcommand, $argument)
 * @method int    publish($channel, $message)
 * @method mixed  unwatch()
 * @method mixed  watch($key)
 * @method mixed  script($subcommand, $argument = null)
 * @method mixed  auth($password)
 * @method string echo ($message)
 * @method mixed  ping($message = null)
 * @method mixed  select($database)
 * @method mixed  bgrewriteaof()
 * @method mixed  bgsave()
 * @method mixed  client($subcommand, $argument = null)
 * @method mixed  config($subcommand, $argument = null)
 * @method mixed  flushall()
 * @method array  info($section = null)
 * @method int    lastsave()
 * @method mixed  save()
 * @method mixed  slaveof($host, $port)
 * @method mixed  slowlog($subcommand, $argument = null)
 * @method array  time()
 * @method array  command()
 * @method int    geoadd($key, $longitude, $latitude, $member)
 * @method array  geohash($key, array $members)
 * @method array  geopos($key, array $members)
 * @method string geodist($key, $member1, $member2, $unit = null)
 * @method array  georadius($key, $longitude, $latitude, $radius, $unit, array $options = null)
 * @method array  georadiusbymember($key, $member, $radius, $unit, array $options = null)
 * @method int    del(array $keys)
 * @method int    exists($key)
 * @method int    expire($key, $seconds)
 * @method array  keys($pattern)
 * @method array  scan($cursor, array $options = null)
 * @method int    ttl($key)
 * @method mixed  type($key)
 * @method int    decr($key)
 * @method int    decrby($key, $decrement)
 * @method string get($key)
 * @method int    incr($key)
 * @method int    incrby($key, $increment)
 * @method string incrbyfloat($key, $increment)
 * @method array  mget(array $keys)
 * @method mixed  mset(array $dictionary)
 * @method mixed  set($key, $value, $expireResolution = null, $expireTTL = null, $flag = null)
 * @method int    setex($key, $seconds, $value)
 * @method int    setnx($key, $value)
 * @method int    hdel($key, array $fields)
 * @method int    hexists($key, $field)
 * @method string hget($key, $field)
 * @method array  hgetall($key)
 * @method int    hincrby($key, $field, $increment)
 * @method array  hkeys($key)
 * @method int    hlen($key)
 * @method array  hmget($key, array $fields)
 * @method mixed  hmset($key, array $dictionary)
 * @method int    hset($key, $field, $value)
 * @method int    hsetnx($key, $field, $value)
 * @method string lindex($key, $index)
 * @method int    llen($key)
 * @method string lpop($key)
 * @method int    lpush($key, array $values)
 * @method array  lrange($key, $start, $stop)
 * @method int    lrem($key, $count, $value)
 * @method mixed  ltrim($key, $start, $stop)
 * @method string rpop($key)
 * @method string rpoplpush($source, $destination)
 * @method int    rpush($key, array $values)
 * @method int    sadd($key, array $members)
 * @method int    scard($key)
 * @method array  sdiff(array $keys)
 * @method array  sinter(array $keys)
 * @method int    sismember($key, $member)
 * @method array  smembers($key)
 * @method int    srem($key, $member)
 * @method array  sunion(array $keys)
 * @method int    zadd($key, array $membersAndScoresDictionary)
 * @method int    zcard($key)
 * @method string zincrby($key, $increment, $member)
 * @method array  zrange($key, $start, $stop, array $options = null)
 * @method array  zrangebyscore($key, $min, $max, array $options = null)
 * @method int    zrank($key, $member)
 * @method int    zrem($key, $member)
 * @method int    zremrangebyscore($key, $min, $max)
 * @method array  zrevrange($key, $start, $stop, array $options = null)
 * @method array  zrevrangebyscore($key, $max, $min, array $options = null)
 * @method int    zrevrank($key, $member)
 * @method string zscore($key, $member)
 * @method mixed  discard()
 * @method array  exec()
 * @method mixed  multi()
 * @method mixed  eval($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method mixed  evalsha($script, $numkeys, $keyOrArg1 = null, $keyOrArgN = null)
 * @method int    dbsize()
 * @method mixed  flushdb()
 */
class MyRedisMock implements ClientInterface
{
    private RedisMock $mock;

    public function __construct()
    {
        $this->mock = new RedisMock();
    }

    public function getMock(): RedisMock
    {
        return $this->mock;
    }

    public function getProfile()
    {
    }

    public function getOptions()
    {
    }

    public function connect()
    {
    }

    public function disconnect()
    {
    }

    public function getConnection()
    {
    }

    public function createCommand($method, $arguments = [])
    {
        // TODO: Implement createCommand() method.
    }

    public function executeCommand(CommandInterface $command)
    {
        // TODO: Implement executeCommand() method.
    }

    public function __call($method, $arguments)
    {
        return $this->mock->$method(...$arguments);
    }
}
