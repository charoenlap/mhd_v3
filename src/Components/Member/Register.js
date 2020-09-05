import React, { Component } from "react";
import { Form, Input, Button, Image, Card, Layout, Row, Col } from "antd";
import { Link } from "react-router-dom";

const { Content } = Layout;

class Register extends Component {
  constructor(props) {
    super(props);

    this.state = {
      email: "",
      password: "",
    };
  }

  render() {
    // const onFinishFailed = (errorInfo) => {
    //   console.log("Failed:", errorInfo);
    // };
    return (
      <Layout>
        <Content className="bgLogin">
          <Row>
            <Col span={20} offset={2}>
              <Image src="/images/header.png" />
            </Col>
            <Col span={10} offset={7}>
              <Card
                title="เข้าสู่ระบบ"
                extra={<Link to="./login">เข้าสู่ระบบ</Link>}
              >
                <p>Register</p>
              </Card>
            </Col>
          </Row>
        </Content>
      </Layout>
    );
  }
}

export default Register;
